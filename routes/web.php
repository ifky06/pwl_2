<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "2141720028 - Ahmad Rifki Fauzi";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID ".$id;
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/', [PageController::class, 'home']);
Route::prefix('product')->group(function () {
    Route::get('/list', [PageController::class, 'product']);
});

Route::get('/news/{param}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

Route::get('/about', [PageController::class, 'about']);

Route::resource('contact', pageController::class);