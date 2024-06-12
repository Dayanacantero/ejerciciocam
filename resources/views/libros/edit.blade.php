<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $libro->title }}" required maxlength="45">
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" required>
        <br>
        <label for="paginas">Paginas:</label>
        <input type="number" name="paginas" id="paginas" value="{{ $libro->paginas }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>