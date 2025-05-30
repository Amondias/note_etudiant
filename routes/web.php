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