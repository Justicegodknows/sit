<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Fortify\Features;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

 // authentication routes
Route::get('register', [RegisterController::class, 'create'])->name('register.form');
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

  

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show')->where('author', '[0-9]+');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit')->where('author', '[0-9]+');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update')->where('author', '[0-9]+');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy')->where('author', '[0-9]+');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->where('user', '[0-9]+');

Route::get('/productcategories', [ProductcategoryController::class, 'index'])->name('productcategories.index');
Route::get('/productcategories/create', [ProductcategoryController::class, 'create'])->name('productcategories.create');
Route::post('/productcategories', [ProductcategoryController::class, 'store'])->name('productcategories.store');
Route::get('/productcategories/{productcategory}', [ProductcategoryController::class, 'show'])->name('productcategories.show')->where('productcategory', '[0-9]+');
Route::get('/productcategories/{productcategory}/edit', [ProductcategoryController::class, 'edit'])->name('productcategories.edit')->where('productcategory', '[0-9]+');
Route::put('/productcategories/{productcategory}', [ProductcategoryController::class, 'update'])->name('productcategories.update')->where('productcategory', '[0-9]+');
Route::delete('/productcategories/{productcategory}', [ProductcategoryController::class, 'destroy'])->name('productcategories.destroy')->where('productcategory', '[0-9]+');



// Dashboard route that links to product category page after login

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');






