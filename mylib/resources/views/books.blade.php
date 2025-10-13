<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Postingan</title>
    <style>
        body { font-family: sans-serif; }
        .book { border-bottom: 1px solid #ccc; padding: 10px 0; }
    </style>
</head>
<body>

    <h1>Semua Postingan</h1>

    @foreach ($books as $book)
        <div class="book">
            {{-- Tampilkan judul post --}}
            <h2>{{ $book->judul }}</h2>

            {{-- Tampilkan isi post --}}
            <p>{{ $book->penulis }}</p>
            <p>{{ $book->tahun_terbit }}</p>
            @if ($book->tersedia == 1)
                <p>Ada</p>
            @else
                <p>Tidak ada</p>
            @endif
            <form method="POST" action="/change/{{ $book->id }}">
                @csrf
                <button type="submit">Pinjam</button>
            </form>
            <form method="POST" action="/edit/{{ $book->id }}">
                @csrf
                <button type="submit">Edit</button>
            </form>
            <form method="POST" action="/delete/{{ $book->id }}">
                @csrf
                <button type="submit">Hapus</button>
            </form>
        </div>
    @endforeach

    <p>Tambah Buku</p>
    <form action="/add" method="POST">
        @csrf
         <label for="title">judul</label>
        <input type="text" id="title" name="title">
        <label for="author">pengarang</label>
        <input type="text" id="author" name="author">
        <label for="published">tahun terbit</label>
        <input type="text" id="published" name="published">
        <button type="submit">Tambah</button>
    </form>

</body>
</html>