@extends('layouts.base')
@section('title', 'Lise des evaluations')
@section('content')
<div class="container mt-4">
    <h2>Liste des Évaluations</h2>
    <a href="{{ route('evaluation.create') }}" class="btn btn-primary">Nouvelle Évaluation</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evaluations as $eval)
                <tr>
                    <td>{{ $eval->titre }}</td>
                    <td>{{ $eval->date }}</td>
                    <td>{{ $eval->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
