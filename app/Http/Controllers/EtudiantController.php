<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.dashboard', compact('etudiants'));
    }

    public function create()
    {
        return view('etudiant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'classe' => 'required|string',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string',
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiant.dashboard')->with('success', 'Étudiant ajouté avec succès');
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.edit', compact('etudiant'));
    }

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $etudiant->update($request->all());

        return redirect()->route('etudiant.dashboard')->with('success', 'Étudiant modifié avec succès');
    }

    public function destroy($id)
    {
        $etudiant = FindOrFail($id);
        $etudiant->delete();

        return redirect()->rout('etudiant.dashboard')->xith('success', 'Etudiant supprimé avec succès');
    }
}
