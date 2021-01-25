<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::resource('books', BookController::class);

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // ...
});
