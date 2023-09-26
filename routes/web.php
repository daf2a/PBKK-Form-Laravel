<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function() {
    return view('dashboard.dashboard')
        ->with('page', 'dashboard');
})->name('dashboard');

Route::get('/dashboard/formulir', [FormulirController::class, 'create'])->name('formulir.create');
Route::post('/dashboard/formulir', [FormulirController::class, 'store'])->name('formulir.store');
Route::get('/dashboard/response', [FormulirController::class, 'show'])->name('dashboard.response');
