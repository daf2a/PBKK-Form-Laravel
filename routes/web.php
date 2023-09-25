<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing-page');
})->name('landing-page');

Route::get('/masuk', function() {
    return 'halaman masuk';
})->name('masuk');

Route::get('/daftar', function() {
    return 'halaman daftar';
})->name('daftar');

Route::get('/dashboard', function() {
    $nama = 'freder';
    return view('dashboard.beranda', compact('nama'))
        ->with('page', 'beranda');
})->name('dashboard');

Route::get('/dashboard/tugas-akhir', function() {
    return view('dashboard.tugas-akhir', [
        'nama' => 'Luthfiyyah',
        'page' => 'tugas-akhir'
    ]);
})->name('tugas-akhir');

Route::get('/dashboard/penawaran-topik', [TopicController::class, 'show'])->name('penawaran-topik');
Route::get('/dashboard/penawaran-topik/tambah', [TopicController::class, 'showForm'])->name('tambah-penawaran-topik');
Route::middleware(['special'])->
put('/dashboard/penawaran-topik/tambah', [TopicController::class, 'simpan'])->name('tambah-penawaran-topik');

Route::prefix('contoh')->name('contoh.')->group(function () {
    Route::get('', function () {
        return redirect()->route('bukan_contoh.anak2');
    });
    Route::get('dengan_parameter/{id}', [\App\Http\Controllers\ContohController::class, 'url1parameter']);
    Route::get('dengan_parameter/{id}/{sub}', [\App\Http\Controllers\ContohController::class, 'url2parameter']);
    Route::middleware('web')->get('/anak', function () {
        echo 'ini anak';
    })->name('anak');
    Route::get('/anak2', function () {
        echo 'ini anak 2';
    })->name('anak2');
});

Route::resource('photos', \App\Http\Controllers\PhotoController::class);
