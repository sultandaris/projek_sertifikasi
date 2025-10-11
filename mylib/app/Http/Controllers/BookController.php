<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function book_index()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function changeStatus($id)
    {
        $book = Book::find($id);
        $book->tersedia = !book->tersedia;
    }
}
