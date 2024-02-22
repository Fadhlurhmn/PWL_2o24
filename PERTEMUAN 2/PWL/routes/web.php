<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// BASIC ROUTING
// ----
// Route::get('/hello', function () {
//     return 'Hello World';
// });
Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241720081';
});
// ----

// ROUTE PARAMETERS
// ----
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' . $postId . 'Komentar ke-: ' . $commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID: ' . $id;
});
// ----

// OPTIONAL PARAMETERS
// ----
// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama Saya ' . $name;
// });
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama Saya ' . $name;
});
// ----

// ROUTE NAME
// ----
Route::get('/user/profile', function () {
    return 'testing';
})->name('profile');
// Route::get('profile', function () {
//     return 'ini profile';
// });
// ----

// ROUTE GROUP dan ROUTE PREFIXS
// ----
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Use first & second middleware..
//     });
//     Route::get('/user/profile', function () {
//         // Use first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });
// Route::prefix('admin')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });
// ----

// REDIRECT ROUTES
// ----
// Route::redirect('/here', '/there');
// ----

// VIEWS ROUTE
// -----
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// ----


// untuk controller
Route::get('/hello', [WelcomeController::class, 'hello']);
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Fadhlu']);
// });

Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
