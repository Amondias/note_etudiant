<?php
namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluation.dashboard', compact('evaluation'));
    }

    public function create()
    {
        return view('evaluation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date' => 'required|date',
            'type' => 'required|in:devoir,examen',
        ]);

        Evaluation::create($request->all());
        return redirect()->route('evaluations.index')->with('success', 'Évaluation ajoutée.');
    }
}
