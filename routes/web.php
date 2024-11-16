<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/blog-create', [BlogController::class, 'index'])->name('blog.create')->middleware('auth');
Route::post('/blog', [BlogController::class, 'blogCreate'])->name('blog')->middleware('auth');
Route::get('/blog-show', [BlogController::class, 'blogShow'])->name('blog.show')->middleware('auth');


