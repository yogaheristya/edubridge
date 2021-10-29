<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/layanan-kami', function () {
    return view('pages/layanan-kami', ['title' => 'layanan']);
});

Route::get('/studi-luar', function () {
    return view('pages/studi-luar', ['title' => 'studi']);
});
