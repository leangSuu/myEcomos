<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/library', [BookController::class, 'index']);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN BOOK CRUD (FIXED)
|--------------------------------------------------------------------------
*/

Route::prefix('admin/books')->name('admin.books.')->group(function () {

    Route::get('/', [AdminBookController::class, 'index'])
        ->name('index');

    Route::get('/create', [AdminBookController::class, 'create'])
        ->name('create');

    Route::post('/store', [AdminBookController::class, 'store'])
        ->name('store');

    Route::get('/edit/{id}', [AdminBookController::class, 'edit'])
        ->name('edit');

    Route::post('/update/{id}', [AdminBookController::class, 'update'])
        ->name('update');

    Route::get('/delete/{id}', [AdminBookController::class, 'destroy'])
        ->name('delete');
});