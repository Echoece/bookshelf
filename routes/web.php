<?php

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

Route::get('/', function () {
    return view('welcome');
});

// book routes
Route::get('/booklist',[\App\Http\Controllers\BookController::class,'index']);
Route::get('/books/edit/{id}',[\App\Http\Controllers\BookController::class,'editBook']);
Route::post('/books/edit/{id}',[\App\Http\Controllers\BookController::class,'updateBook']);
Route::get('/books/delete/{id}',[\App\Http\Controllers\BookController::class,'deleteBook']);
Route::get('/books/details/{id}',[\App\Http\Controllers\BookController::class,'detailsBook']);

// comment/rating route
Route::post('/comment/{id}',[\App\Http\Controllers\commentController::class,'comment']);

// genre routes
Route::get('/genre',[\App\Http\Controllers\genreController::class,'index']);
Route::get('/genre/{genre}',[\App\Http\Controllers\genreController::class,'bookByGenre']);


// writer routes
Route::get('/writer',[\App\Http\Controllers\writerController::class,'index']);
Route::get('/writer/{writer}',[\App\Http\Controllers\writerController::class,'bookByWriter']);

// request book route
Route::get('/request_book',[\App\Http\Controllers\requestBookController::class,'index']);
Route::post('/request_book',[\App\Http\Controllers\requestBookController::class,'bookRequest']);

// admin routes
Route::post('/admin/addBook',[\App\Http\Controllers\AdminController::class,'addBook'])->name('addBook');
Route::get('/admin/allBook',[\App\Http\Controllers\AdminController::class,'allBook'])->name('allBook');

// auth routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
