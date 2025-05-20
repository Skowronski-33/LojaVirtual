<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos</title>
</head>

<body>
    <a href="{{ url('/types/new') }}">Adicionar um novo tipo</a>
    <a href="{{ url('/') }}">Voltar</a>
    <h3>Lista de Produtos</h3>
    <ul>
        @foreach($types as $type)
          <li> {{ $type ['name'] }} <a href="{{ url('/types/update', ['id' => $types->id]) }}">Editar</a>
         <a href="{{ url('/types/delete', ['id' => $types->id]) }}">Excluir</a>
        </li>
        @endforeach
    </ul>

</body>
</html>