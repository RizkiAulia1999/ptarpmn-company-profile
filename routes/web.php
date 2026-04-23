<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/tentang', [BerandaController::class, 'tentang'])->name('tentang');
Route::get('/contact', [BerandaController::class, 'contact'])->name('contact');
Route::get('/proyek', [BerandaController::class, 'proyek'])->name('proyek');


