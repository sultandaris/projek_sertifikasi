<!DOCTYPE html>
<html lang="en">
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Page</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <h1>Make it 10!</h1>
    <div id="counter">
        <div id="count" class="text-2xl font-bold" x-data="{ count: 0 }" x-text="count"></div>
        <button id="increment" @click="count++" class="bg-green-500 text-white px-4 py-2 rounded">Add</button>
        <button id="decrement" @click="count--" class="bg-red-500 text-white px-4 py-2 rounded">Minus</button>
    </div>
</body>
</html>