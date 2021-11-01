<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/beranda', [HomeController::class, 'index']);

Route::get('/layanan-kami', [LayananController::class, 'index']);

Route::get('/studi-luar', function () {
    return view('pages/studi-luar', ['title' => 'studi']);
});

Route::get('/kursus-bahasa', function () {
    return view('pages/kursus-bahasa', ['title' => 'kursus']);
});

Route::get('/hubungi-kami', function () {
    return view('pages/hubungi-kami', ['title' => 'hubung']);
});
