<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>

<body>
    <a href="{{ url('/products/new') }}">Adicionar</a>
    <a href="{{ url('/') }}">Voltar</a>
    <h3>Lista de produtos</h3>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <from action="{{ url('products') }}" method="GET">
        <input value="{{ $filter ?? '' }}" name="filter" type="text" placeholder="Filtrar produtos" />
        <input type="submit" value="Filtrar" />
    </from>
        

    <ul>
        @foreach($products as $product)
        <li> {{ $product['name'] }} - {{ $product['description'] }} - {{ $product['quantity'] }} - {{ $product['price'] }} - {{ $product['type_id'] }}
            <a href="{{ url('/products/update', ['id'=> $product->id]) }}">Editar</a>
            <a href="{{ url('/products/delete', ['id' => $product->id]) }}">Excluir</a>
        </li>
        @endforeach
    </ul>
</body>

</html>