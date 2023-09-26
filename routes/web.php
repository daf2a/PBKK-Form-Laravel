<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/form', [FormulirController::class, 'index'])->name('formulir.index');
Route::get('/form/create', [FormulirController::class, 'create'])->name('formulir.create');
Route::post('/form', [FormulirController::class, 'store'])->name('formulir.store');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function() {
    return view('dashboard.dashboard')
        ->with('page', 'dashboard');
})->name('dashboard');

Route::get('/form', function() {
    return view('dashboard.form')
        ->with('page', 'form');;
})->name('form');

Route::get('/response', function() {
    return view ('dashboard.response')
        ->with('page', 'response');;
})->name('response');