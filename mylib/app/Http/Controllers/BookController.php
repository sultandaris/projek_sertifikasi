<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function book_index()
    {
        $books = Book::with('categories')->get();
        return view('books', ['books' => $books]);
    }

    public function changeStatus($book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        Log::info('Book status changed', ['book' => $book]);
        $book = Book::where('book_id', $book_id)->first();
        $book->available = $book->available ? false : true;
        Log::info('Book status changed', ['book' => $book]);
        $book->save();
        return redirect('/books');
    }

    public function addBook(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->save();
        return redirect('/books');
    }

    public function editBook($book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        return view('edit', ['book' => $book]);
    }

    public function updateBook(Request $request, $book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->save();
        return redirect('/books');
    }

    public function deleteBook($book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        $book->delete();
        return redirect('/books');
    }
}
