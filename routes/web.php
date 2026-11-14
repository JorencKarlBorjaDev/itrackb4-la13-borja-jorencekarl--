<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/books/featured', [BookController::class, 'featured'])
    ->name('books.featured');

Route::get('/books/filter/{genre?}', function ($genre = null) {

    if ($genre === null) {
        return redirect()->route('books.index');
    }

    return redirect()->route('books.index', [
        'genre' => $genre
    ]);

});

Route::resource('books', BookController::class);
   