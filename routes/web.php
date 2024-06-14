<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReservationController::class, 'home'])->name('home');

// Route pour afficher la carte
Route::get('/carte', [ReservationController::class, 'showCarte'])->name('carte.show');

// Resource pour les réservations
Route::resource('reservations', ReservationController::class);

// Route pour la recherche de réservations
Route::get('/search', [ReservationController::class, 'search'])->name('reservations.search');

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
