<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

Route::impersonate();

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::group(['middleware' => ['auth:sanctum', 'verified'], 'as' => 'books.', 'prefix' => 'books'], function () {
        Route::get('{book}/join', [BookController::class, 'join'])->name('join');
        Route::get('{book}/leave', [BookController::class, 'leave'])->name('leave');
    });

    Route::resource('books', BookController::class)->except(['index', 'show']);
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('users', UserController::class);

Route::resource('books', BookController::class)->only(['index', 'show']);
