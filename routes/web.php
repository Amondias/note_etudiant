<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('welcome');
});

//Routes concernant l'étudiant
Route::get('/etudiant/dashboard', [EtudiantController::class, 'index'])->name('etudiant.dashboard');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant/{id}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('/etudiant/{id}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');


//Routes concernant les evaluations
Route::get('/evaluation/dashboard', [EvaluationController::class, 'index'])->name('evaluation.dashboard');
Route::get('/evaluation/create', [EvaluationController::class, 'create'])->name('evaluation.create');
Route::post('/evaluation', [EvaluationController::class, 'store'])->name('evaluation.store');


//Routes concernant les notes
Route::get('/note/dashboard', [NoteController::class, 'index'])->name('note.dashboard');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');