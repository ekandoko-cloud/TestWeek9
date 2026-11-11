<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BookController::class, 'getAllBooks'])->name('books.getAllBooks');
Route::get('/booksform', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
Route::post('/booksform', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::delete('/destroybook/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
