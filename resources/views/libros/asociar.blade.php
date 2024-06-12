<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('ejemplar_usuario.store')}}" method="post" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>Ejemplares</h1>
        <select name="ejemplar_id">
            @foreach($ejemplars as $ejemplar)
                <option value="{{ $ejemplar->id }}">{{ $ejemplar->id }} - {{ $ejemplar->model }}</option>
            @endforeach
        </select>
        <br>
        <h1>Usuarios:</h1>    
        <select name="usuario_id">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->id }} - {{ $usuario->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>