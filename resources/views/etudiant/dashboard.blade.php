@extends('layouts.base')
@section('title', 'Liste des étudiants')
@section('content')
    <div class="card mb-4">
                  <div class="card-header">
                    <h2 class="card-title">Liste des étudiants</h2>
                </div>

                <a href="{{ route('etudiant.create') }}" class="btn btn-primary mb-3">Ajouter un étudiant</a>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                  
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Prénom</th>
                          <th>Nom</th>
                          <th>Classe</th>
                          <th>Date de naissance</th>
                          <th>Lieu de naissance</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($etudiants as $etudiant)
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->classe }}</td>
                            <td>{{ $etudiant->date_naissance}}</td>
                            <td>{{ $etudiant->lieu_naissance}}</td>
                            <td>
                                <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                                <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cet étudiant ?')">Supprimer</button>
                                </form>
                            </td>  
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">«</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                  </div>
                </div>
@endsection