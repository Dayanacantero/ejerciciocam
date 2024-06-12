<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $libro->title }}</h1>
    <p><strong>Editorial:</strong> {{ $libro->editorial }}</p>
    <p><strong>Paginas:</strong> {{ $libro->paginas }}</p>
    <p><strong>Created At:</strong> {{ $libro->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $libro->updated_at }}</p>
    <a href="{{ route('libros.index') }}">Back to List</a>
</body>
</html>