@extends('layouts.base')
@section('title', 'Liste des étudiants')
@section('content')
    <h2>Ajout de l'étudiant</h2>
    <form action="{{route('etudiant.update', $etudiant->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Classe</label>
            <select type="text" name="nom" class="form-control" required>
                <option value="">--Selectionnez la classe</option>
                <option value="B1A">Bachelor 1A</option>
                <option value="B1B">Bachelor 1B</option>
                <option value="B2CSI">Bachelor 2CSI</option>
                <option value="B2E">Bachelor 2 Energie</option>
        </div>

        <div class="form-group">
            <label>Date de naissance</label>
            <input type="datet" name="date_naissance" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Lieu de naissance</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <button class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection