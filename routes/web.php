<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::get('/greeting', [WelcomeController::class, 'greeting']);


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/about', [WelcomeController::class, 'about']);
// Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

Route::get('/world', function () {
    return 'World';
 });

// Route::get('/', function () {
//     return 'Selamat Datang';
//  });

// Route::get('/about', function () {
//     return 'NIM: 2341760196 <br>
//     Nama: Muhammad Kemal Syahru Ramadhan';
//  });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

