<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Libros</h1>
    <ul>
        @foreach ($libros as $libro)
            <li>
                <a href="{{ route('libros.index', $libro->id) }}">{{ $libro->title }}</a>
            </li>

    <p>{{ $libro->title }}</p>

 
    <a href="{{ route('libros.show', $libro->id) }}">Ver Detalles</a>

    <a href="{{ route('libros.edit', $libro->id) }}">Editar</a>

  
    <form action="{{ route('libros.destroy', $libro->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>

        @endforeach
    </ul>
 
</body>
</html>