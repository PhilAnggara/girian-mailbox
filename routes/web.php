<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\UserController;
use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::post('cetak-pdf', [MainController::class, 'cetakPdf'])->name('cetak-pdf');
    Route::resource('daftar-admin', UserController::class)->middleware('cek.jabatan:Camat');
    
    Route::resource('surat-masuk', SuratMasukController::class);
    Route::resource('surat-keluar', SuratKeluarController::class);
    
});

require __DIR__.'/auth.php';
