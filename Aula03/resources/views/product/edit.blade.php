<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <!-- O Laravel exige o @method('PUT') para rotas de atualização -->
    <form action="/product/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="name">Nome do Produto:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="price">Preço:</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" required>
        </div>
        
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="/product">Voltar para a lista</a>
</body>
</html>