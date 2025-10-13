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
        $book->tersedia = !($book->tersedia);
        $book->save();
        return redirect('/books');
    }

    public function addBook(Request $request)
    {
        $book = new Book();
        $book->judul = $request->input('title');
        $book->penulis = $request->input('author');
        $book->tahun_terbit = $request->input('published');
        $book->tersedia = true;
        $book->save();
        return redirect('/books');
    }

    public function editBook($id)
    {
        $book = Book::find($id);
        return view('edit', ['book' => $book]);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);
        $book->judul = $request->input('title');
        $book->penulis = $request->input('author');
        $book->save();
        return redirect('/books');
    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}
