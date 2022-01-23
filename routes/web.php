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

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/booklist',[\App\Http\Controllers\BookController::class,'index']);

// admin add book route
Route::post('/admin/addBook',[\App\Http\Controllers\AdminController::class,'addBook'])->name('addBook');
Route::get('/admin/allBook',[\App\Http\Controllers\AdminController::class,'allBook'])->name('allBook');


// auth routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
