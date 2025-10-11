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
            @if ($book->tersedia = 1)
                <p>Ada</p>
            @else  
                <p>tidak ada</p>  
            @endif       
            
            <button>Pinjam</button>
             {{-- Ganti 'body' dengan nama kolom di tabelmu --}}
        </div>
    @endforeach

</body>
</html>