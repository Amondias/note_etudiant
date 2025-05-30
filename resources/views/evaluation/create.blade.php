@extends('layouts.master')
@section('title', 'Création Evaluation')
@section('content')
<div class="container mt-4">
    <h2>Créer une Évaluation</h2>
    <form method="POST" action="{{ route('evaluation.store') }}">
        @csrf
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="devoir">Devoir</option>
                <option value="examen">Examen</option>
            </select>
        </div>
        <button class="btn btn-success mt-2">Enregistrer</button>
    </form>
</div>
@endsection
