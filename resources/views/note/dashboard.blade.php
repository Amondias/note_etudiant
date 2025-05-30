@extends('layouts.base')
@section('title', 'Liste des notes')

@section('content')
    <div class="mt-3">
    <h3>Statistiques :</h3>
    <ul class="list-group">
        <li class="list-group-item">
            <strong>Meilleure moyenne :</strong>
            @if($meilleur)
                {{ $meilleur['etudiant']->nom }} {{ $meilleur['etudiant']->prenom }} ({{ $meilleur['moyenne'] }})
            @else
                Aucune donnée
            @endif
        </li>
        <li class="list-group-item">
            <strong>Plus faible moyenne :</strong>
            @if($faible)
                {{ $faible['etudiant']->nom }} {{ $faible['etudiant']->prenom }} ({{ $faible['moyenne'] }})
            @else
                Aucune donnée
            @endif
        </li>
        <li class="list-group-item">
            <strong>Moyenne générale :</strong> {{ $moyenneGenerale }}
        </li>
    </ul>
</div>


<div class="container mt-4">
    <h1>Liste des Notes</h1>
    <a href="{{ route('note.create') }}" class="btn btn-primary">Ajouter une note</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Note Devoir</th>
                <th>Note Examen</th>
                <th>Moyenne</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>
                        {{ optional($etudiant->notes->firstWhere('evaluation.type', 'devoir'))->valeur ?? '-' }}
                    </td>
                    <td>
                        {{ optional($etudiant->notes->firstWhere('evaluation.type', 'examen'))->valeur ?? '-' }}
                    </td>
                    <td>
                        @php
                            $devoir = $etudiant->notes->firstWhere('evaluation.type', 'devoir')->valeur ?? null;
                            $examen = $etudiant->notes->firstWhere('evaluation.type', 'examen')->valeur ?? null;
                            $moyenne = ($devoir !== null && $examen !== null) ? round(($devoir + $examen)/2, 2) : '-';
                        @endphp
                        {{ $moyenne }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

