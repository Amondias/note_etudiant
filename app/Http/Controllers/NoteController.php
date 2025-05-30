<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
{
    $etudiants = Etudiant::with('notes.evaluation')->get();

    $moyennes = [];
    foreach ($etudiants as $etudiant) {
        $devoir = $etudiant->notes->firstWhere('evaluation.type', 'devoir')->valeur ?? null;
        $examen = $etudiant->notes->firstWhere('evaluation.type', 'examen')->valeur ?? null;

        if ($devoir !== null && $examen !== null) {
            $moyenne = round(($devoir + $examen) / 2, 2);
            $moyennes[] = [
                'etudiant' => $etudiant,
                'moyenne' => $moyenne
            ];
        }
    }

    $meilleur = collect($moyennes)->sortByDesc('moyenne')->first();
    $faible = collect($moyennes)->sortBy('moyenne')->first();
    $moyenneGenerale = count($moyennes) > 0 ? round(array_sum(array_column($moyennes, 'moyenne')) / count($moyennes), 2) : '-';

    return view('note.dashboard', compact('etudiants', 'meilleur', 'faible', 'moyenneGenerale'));
}

}
