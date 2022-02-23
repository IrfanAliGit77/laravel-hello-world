<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EducaController;

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

// Route::get('/', function ($id) {
//     echo " Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function ($id) {
//     echo " NIM      : 2041720067";
//     echo " Nama     : Muh. Irfan Ali";
//     echo " Kelas    : TI-2G";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID: " . $id;
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/', function ($id) {
    echo 'Hi ! Selamat Datang di Website Educa Studio :")';
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function ($id) {
        echo 'Ini adalah Halaman Game Kelereng Hehehe';
    });
    Route::get('/marbel-and-friends-kids-games', function ($id) {
        echo 'Ini adalah Halaman Game Kelereng yang bisa dimainkan bersama Teman-Teman!';
    });
    Route::get('/riri-story-books', function ($id) {
        echo 'Ini adalah Halaman dari Buku Cerita Riri';
    });
    Route::get('/kolak-kids-songs', function ($id) {
        echo 'Ini adalah Lagu Anak-anak Kolak, selamat Mendengarkan :D';
    });
});

Route::get('/news/{name?}', function ($name = null) {
    echo 'Ini adalah Halaman Berita dari Educa Studio';
});
Route::get('/news/{name?}', function ($name = 'educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19') {
    echo 'Ini adalah Halaman Berita dari Educa Studio yang Berbagi pada Warga Terdampak Covid-19';
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function ($id) {
        echo 'Ini adalah Halaman Program Karir Educa Studio';
    });
    Route::get('/magang', function ($id) {
        echo 'Ini adalah Halaman Program Magang Educa Studio';
    });
    Route::get('/kunjungan-industri', function ($id) {
        echo 'Ini adalah Halaman Program Kunjungan Industri Educa Studio';
    });
});

Route::get('/about-us', function ($id) {
    echo " Instagram    : @educaStud";
    echo " Facebook     : Educa Studio";
    echo " Whatsapp     : +6287345890765";
});

Route::get('/', [EducaController::class, 'index']);
Route::get('/category/marbel-edu-games', [EducaController::class, 'marbel']);
Route::get('/category/marbel-and-friends-kids-games', [EducaController::class, 'marbelFriends']);
Route::get('/category/riri-story-books', [EducaController::class, 'riri']);
Route::get('/category/kolak-kids-songs', [EducaController::class, 'song']);
Route::get('/news', [EducaController::class, 'berita']);
Route::get('/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19', [EducaController::class, 'berita2']);
Route::get('/program/karir', [EducaController::class, 'karir']);
Route::get('/program/magang', [EducaController::class, 'magang']);
Route::get('/program/kunjungan-industri', [EducaController::class, 'kunjungan']);
Route::get('/about-us', [EducaController::class, 'about']);
