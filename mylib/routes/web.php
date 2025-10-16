<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/add',[BookController::class, 'addBook']);

Route::get('/books', [BookController::class, 'book_index']);

Route::post('/change/{book_id}', [BookController::class, 'changeStatus']);

Route::post('/edit/{book_id}', [BookController::class, 'editBook']);

Route::put('/books/{book_id}', [BookController::class, 'updateBook']);

Route::post('/delete/{book_id}', [BookController::class, 'deleteBook']);

Route::get('/count', function () {
    return view('count');
});