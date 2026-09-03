<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Todos os Produtos</h1>
    <a href="/product/create">Novo Produto</a>
    <br><br>
    <!-- Loop para exibir cada produto separado -->
    @forelse($products as $product)
        <div class="product-card">
            <div class="product-title">ID: {{ $product->id }} - {{ $product->name }}</div>
            <p>Preço: R$ {{ $product->price }}</p>

            <div>
                <!-- Botão de Editar -->
                <a href="/product/{{ $product->id }}/edit">Editar</a>

                <!-- Botão de Excluir -->
                <form action="/product/{{ $product->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </div>
        </div>
    @empty
        <p>Nenhum produto cadastrado.</p>
    @endforelse
</body>
</body>
</html>