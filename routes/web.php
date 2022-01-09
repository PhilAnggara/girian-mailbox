<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SuratMasukController;
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
    
    Route::resource('surat-masuk', SuratMasukController::class);
    
});

require __DIR__.'/auth.php';
