<!-- filepath: c:\Users\Sultan Daris\Desktop\projek_sertifikasi\mylib\resources\views\books.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Postingan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans m-0">
<div class="flex min-h-screen">
    <nav class="w-64 bg-gray-100 p-6">
        <ul class="space-y-4">
            <li>- Dashboard</li>
            <li>- Daftar Buku</li>
            <li>- Kategori</li>
        </ul>
    </nav>
    <!-- Content -->
    <div class="flex-1 p-8">
        <h1 class="text-2xl font-bold mb-6">Semua Postingan</h1>
        @foreach ($books as $book)
            <div class="mb-6 border-b pb-4">
                <h2 class="text-xl font-semibold">{{ $book->title }}</h2>
                <p class="text-gray-700">{{ $book->author }}</p>
                <p class="text-gray-500">{{ $book->published }}</p>
                <p class="text-sm text-blue-700">
                    {{ $book->categories->pluck('category_name')->join(', ') }}
                </p>
                <p class="mt-2">
                    @if ($book->available)
                        <span class="text-green-600">Ada</span>
                    @else
                        <span class="text-red-600">Tidak ada</span>
                    @endif
                </p>
                <div class="flex gap-2 mt-2">
                    <form method="POST" action="/change/{{ $book->book_id }}">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Pinjam</button>
                    </form>
                    <form method="POST" action="/edit/{{ $book->book_id }}">
                        @csrf
                        <button type="submit" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</button>
                    </form>
                    <form method="POST" action="/delete/{{ $book->book_id }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach

        <h2 class="text-xl font-bold mt-8 mb-4">Tambah Buku</h2>
        <form action="/add" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="title" class="block font-medium">Judul</label>
                <input type="text" id="title" name="title" class="border rounded w-full px-3 py-2">
            </div>
            <div>
                <label for="author" class="block font-medium">Pengarang</label>
                <input type="text" id="author" name="author" class="border rounded w-full px-3 py-2">
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Tambah</button>
        </form>
    </div>
</div>
</body>
</html>