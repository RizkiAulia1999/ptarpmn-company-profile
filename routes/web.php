<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/tentang', [BerandaController::class, 'tentang'])->name('tentang');
