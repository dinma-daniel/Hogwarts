<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('Landing');
});

Route::get('/dashboard', [Dashboard::class, 'borrowedBooks'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.borrowedBooks');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books/borrow/{id}', [BookController::class, 'borrow'])->name('books.borrow');
Route::get('/books/open/{id}', [BookController::class, 'open'])->name('books.open');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware([AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.books.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.books.delete');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.books.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.books.delete');
});


require __DIR__.'/auth.php';
