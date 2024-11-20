<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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

// Blog
Route::get('/blog-create', [BlogController::class, 'index'])->name('blog.create')->middleware('auth');
Route::post('/blog-post', [BlogController::class, 'blogCreate'])->name('blog')->middleware('auth');
Route::get('/blog', [BlogController::class, 'blogShow'])->name('blog.show')->middleware('auth');
Route::get('blog-edit/{post}', [BlogController::class, 'showEditBlog'])->name('blog.edit')->middleware('auth');
Route::put('blog-edit/{post}', [BlogController::class, 'updateEditBlog'])->name('blog.edit')->middleware('auth');
Route::delete('blog-delete/{post}', [BlogController::class, 'deleteBlog'])->name('blog.delete')->middleware('auth');

// Contact
 Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index')->middleware('auth');
Route::get('/contact-upsert', [ContactController::class, 'upsert'])->name('contact.upsert')->middleware('auth');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store')->middleware('auth');
Route::get('/contact-edit/{contact}', [ContactController::class, 'showEditContact'])->name('contact.edit')->middleware('auth');
Route::put('/contact-edit/{contact}', [ContactController::class, 'updateEditContact'])->name('contact.edit')->middleware('auth');
Route::delete('/contact-delete/{contact}', [ContactController::class, 'deleteContact'])->name('contact.delete')->middleware('auth');

// Category
Route::get('categories', [CategoryController::class, 'index'])->name('category.index')->middleware('auth');
Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store')->middleware('auth');
Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
Route::put('/category-edit/{category}', [CategoryController::class, 'update'])->name('category.edit')->middleware('auth');
Route::get('/category-delete/{category}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('auth');
