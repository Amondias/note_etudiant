@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <h1>Ajouter une Note</h1>
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <div class="form-group">
            <label>Étudiant</label>
            <select name="etudiant_id" class="form-control" required>
                <option value="">-- Sélectionner --</option>
                @foreach($etudiants as $etudiant)
                    <option value="{{ $etudiant->id }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Évaluation</label>
            <select name="evaluation_id" class="form-control" required>
                <option value="">-- Sélectionner --</option>
                @foreach($evaluations as $eval)
                    <option value="{{ $eval->id }}">{{ $eval->titre }} ({{ $eval->type }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Note</label>
            <input type="number" name="valeur" class="form-control" step="0.01" min="0" max="20" required>
        </div>
        <button class="btn btn-success mt-2">Enregistrer</button>
    </form>
</div>
@endsection
