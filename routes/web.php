<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdultoController;
use App\Http\Controllers\RecordatorioController;

use App\Http\Controllers\RutinaController;




Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/recordatorios/create', [RecordatorioController::class, 'create'])->name('recordatorios.create');
    Route::post('/recordatorios', [RecordatorioController::class, 'store'])->name('recordatorios.store');
    Route::get('/recordatorios/index', [RecordatorioController::class, 'index'])->name('recordatorios.index');

});



Route::middleware(['auth'])->group(function () {
    Route::get('/adultos', [AdultoController::class, 'index'])->name('adultos.index');
    Route::get('/adultos/create', [AdultoController::class, 'create'])->name('adultos.create');
    Route::post('/adultos', [AdultoController::class, 'store'])->name('adultos.store');
});




Route::middleware(['auth'])->group(function () {
    Route::get('/familiar/dashboard', [DashboardController::class, 'familiar'])->name('dashboard.familiar');
    Route::get('/adulto/dashboard', [DashboardController::class, 'adulto'])->name('dashboard.adulto');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
