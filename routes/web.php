<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

Route::get('/bookshelf', [BookshelfController::class, 'bookshelf']);
Route::post('/bookshelf', [BookshelfController::class, 'comment'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
