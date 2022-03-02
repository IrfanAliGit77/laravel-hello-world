<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
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

// Route::get('/', function ($id) {
//     echo '<a href=https://www.educastudio.com>Menuju Ke HOME EDUCA STUDIO</a>';
// });

// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', function ($id) {
//         echo '<a href=https://www.educastudio.com/category/marbel-edu-games>Ingin Bermain Marbel?</a>';
//     });
//     Route::get('/marbel-and-friends-kids-games', function ($id) {
//         echo '<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games>Ingin Bermain Marbel bersama Teman?</a>';
//     });
//     Route::get('/riri-story-books', function ($id) {
//         echo '<a href=https://www.educastudio.com/category/riri-story-books>Ayo Baca Buku Cerita Riri :D</a>';
//     });
//     Route::get('/kolak-kids-songs', function ($id) {
//         echo '<a href=https://www.educastudio.com/category/kolak-kids-songs>Mari Mendengarkan Lagu Anak-anak dari Kolak!</a>';
//     });
// });

// Route::get('/news/{name?}', function ($name = null) {
//     echo '<a href=https://www.educastudio.com/news>Baca Berita dari Educa Studio</a>';
// });
// Route::get('/news/{name?}', function ($name = 'educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19') {
//     echo '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19>
//     Educa Studio Berbagi Pada Warga Terdampak Covid-19</a>';
// });

// Route::prefix('program')->group(function () {
//     Route::get('/karir', function ($id) {
//         echo '<a href=https://www.educastudio.com/program/karir>Program Karir Educa Studio</a>';
//     });
//     Route::get('/magang', function ($id) {
//         echo '<a href=https://www.educastudio.com/program/magang>Program Magang Educa Studio</a>';
//     });
//     Route::get('/kunjungan-industri', function ($id) {
//         echo '<a href=https://www.educastudio.com/program/kunjungan-industri>Program Kunjungan Industri Educa Studio</a>';
//     });
// });

// Route::get('/about-us', function ($id) {
//     echo '<a href=https://www.educastudio.com/about-us>Tentang Educa Studio</a>';
// });

// Route::get('/', [EducaController::class, 'index']);
// Route::get('/category/marbel-edu-games', [EducaController::class, 'marbel']);
// Route::get('/category/marbel-and-friends-kids-games', [EducaController::class, 'marbelFriends']);
// Route::get('/category/riri-story-books', [EducaController::class, 'riri']);
// Route::get('/category/kolak-kids-songs', [EducaController::class, 'song']);
// Route::get('/news', [EducaController::class, 'berita']);
// Route::get('/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19', [EducaController::class, 'berita2']);
// Route::get('/program/karir', [EducaController::class, 'karir']);
// Route::get('/program/magang', [EducaController::class, 'magang']);
// Route::get('/program/kunjungan-industri', [EducaController::class, 'kunjungan']);
// Route::get('/about-us', [EducaController::class, 'about']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('index');
});
