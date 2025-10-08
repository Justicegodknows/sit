<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use app\Http\Controllers\ProfileController; 
use app\Http\Controllers\PasswordController;
use app\Http\controllers\AuthorController;
use app\Http\controllers\ProductcategoryController;
use app\Http\controllers\ProductsoldController;
use app\Http\controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');

Route::get('/productcategories', [ProductcategoryController::class, 'index'])->name('productcategories.index');
Route::get('/productcategories/create', [ProductcategoryController::class, 'create'])->name('productcategories.create');
Route::post('/productcategories', [ProductcategoryController::class, 'store'])->name('productcategories.store');
Route::get('/productcategories/{productcategory}', [ProductcategoryController::class, 'show'])->name('productcategories.show');
Route::get('/productcategories/{productcategory}/edit', [ProductcategoryController::class, 'edit'])->name('productcategories.edit');
Route::put('/productcategories/{productcategory}', [ProductcategoryController::class, 'update'])->name('productcategories.update');
Route::delete('/productcategories/{productcategory}', [ProductcategoryController::class, 'destroy'])->name('productcategories.destroy');

Route::get('/productsolds', [ProductsoldController::class, 'index'])->name('productsolds.index');
Route::get('/productsolds/create', [ProductsoldController::class, 'create'])->name('productsolds.create');
Route::post('/productsolds', [ProductsoldController::class, 'store'])->name('productsolds.store');
Route::get('/productsolds/{productsold}', [ProductsoldController::class, 'show'])->name('productsolds.show');
Route::get('/productsolds/{productsold}/edit', [ProductsoldController::class, 'edit'])->name('productsolds.edit');
Route::put('/productsolds/{productsold}', [ProductsoldController::class, 'update'])->name('productsolds.update');
Route::delete('/productsolds/{productsold}', [ProductsoldController::class, 'destroy'])->name('productsolds.destroy');

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';
