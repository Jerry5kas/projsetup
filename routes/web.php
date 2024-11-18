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
Route::post('/blog-post', [BlogController::class, 'blogCreate'])->name('blog')->middleware('auth');
Route::get('/blog', [BlogController::class, 'blogShow'])->name('blog.show')->middleware('auth');


Route::get('blog-edit/{post}', [BlogController::class, 'showEditBlog'])->name('blog.edit');
Route::put('blog-edit/{post}', [BlogController::class, 'updateEditBlog'])->name('blog.edit');
Route::delete('blog-delete/{post}', [BlogController::class, 'deleteBlog'])->name('blog.delete');

