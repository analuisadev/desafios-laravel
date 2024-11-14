<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product['productName'] }}</strong> - R$ {{ number_format($product['productPrice'], 2, ',', '.') }}
                <a href="{{ url('/produtos/'.$product['id']) }}">Ver Detalhes</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
