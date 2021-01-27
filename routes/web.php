<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


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

Route::impersonate();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('books/create/{category_id?}', [BookController::class, 'create'])->name('books.create');
    Route::get('books/{book}/join', [BookController::class, 'join'])->name('books.join');
    Route::get('books/{book}/leave', [BookController::class, 'leave'])->name('books.leave');

    Route::resource('books', BookController::class)->except(['create', 'index', 'show'])->middleware('isBookAdmin');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('users', UserController::class);

Route::resource('books', BookController::class)->only(['index', 'show']);
