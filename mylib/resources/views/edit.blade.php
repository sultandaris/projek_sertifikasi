<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku: {{ $book->title }}</title>
</head>
<body>
    <h1>Edit Buku: {{ $book->title }}</h1>

    <form action="/books/{{ $book->book_id }}" method="POST">
        @csrf
        @method('PUT') {{-- PENTING! Memberitahu Laravel ini adalah request PUT --}}

        <div>
            <label for="title">Judul:</label><br>
            <input type="text" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div>
            <label for="author">Pengarang:</label><br>
            <input type="text" id="author" name="author" value="{{ $book->author }}">
        </div>        
        <br>
        <button type="submit">Update Buku</button>
    </form>

</body>
</html>