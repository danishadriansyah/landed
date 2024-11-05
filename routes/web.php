<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/land', function () {
//     return view('land');
// });

Route::get('/dex', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');