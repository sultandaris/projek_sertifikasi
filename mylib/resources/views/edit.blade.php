<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku: {{ $book->judul }}</title>
</head>
<body>
    <h1>Edit Buku: {{ $book->judul }}</h1>

    <form action="/books/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT') {{-- PENTING! Memberitahu Laravel ini adalah request PUT --}}

        <div>
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title" value="{{ $book->judul }}">
        </div>
        <div>
            <label for="author">Pengarang:</label><br>
            <input type="text" id="author" name="author" value="{{ $book->penulis }}">
        </div>        
        <br>
        <button type="submit">Update Buku</button>
    </form>

</body>
</html>