<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>{{ $product['productName'] }}</h1>
    <p><strong>Descrição:</strong> {{ $product['productDescription'] }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($product['productPrice'], 2, ',', '.') }}</p>

    <a href="{{ url('/produtos') }}">Voltar para a lista de produtos</a>
</body>
</html>
