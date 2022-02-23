<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function ($id) {
    echo " Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function ($id) {
    echo " NIM      : 2041720067";
    echo " Nama     : Muh. Irfan Ali";
    echo " Kelas    : TI-2G";
});
Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID: " . $id;
});

Route::get('/', [PageController::class, 'index']);
Route::get('/', [PageController::class, 'about']);
Route::get('/', [PageController::class, 'articles']);
