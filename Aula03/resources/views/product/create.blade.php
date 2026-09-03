<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de Criação de Produto</h1>
    <form action="/product" method="POST">
        @csrf
        <div>
            <label for="name">Nome do Produto:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="price">Preço:</label>
            <input type="number" step="0.01" name="price" id="price" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="/product">Voltar para a lista</a>
</body>
</html>