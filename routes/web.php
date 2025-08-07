<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/single-blog', [HomeController::class, 'singleBlog'])->name('single-blog');
