<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('test', [\App\Http\Controllers\TestController::class, 'index'])->name('test')->middleware('auth');
Route::get('/test-create', [\App\Http\Controllers\TestController::class, 'create'])->name('test.create')->middleware('auth');
Route::post('/test-store', [\App\Http\Controllers\TestController::class, 'store'])->name('test.store')->middleware('auth');

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

//Product
Route::get('products', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
Route::get('/product-create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/product-edit/{product}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product-edit/{product}', [ProductController::class, 'update'])->name('product.edit')->middleware('auth');
Route::get('/product-delete/{product}', [ProductController::class, 'delete'])->name('product.delete')->middleware('auth');


