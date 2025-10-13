<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/add',[BookController::class, 'addBook']);

Route::get('/books', [BookController::class, 'book_index']);

Route::post('/change/{id}', [BookController::class, 'changeStatus']);

Route::post('/edit/{id}', [BookController::class, 'editBook']);

Route::put('/books/{id}', [BookController::class, 'updateBook']);

Route::post('/delete/{id}', [BookController::class, 'deleteBook']);