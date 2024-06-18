<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    @include('header')

    <div class="container">
        <h1>Carrinho de Compras</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (empty($cartItems))
            <h2>O carrinho está vazio.</h2>
        @else
            @foreach ($cartItems as $item)
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $item['produto_nome'] }}</span>
                                <p>Quantidade: {{ $item['quantidade'] }}</p>
                                <p>Preço: R$ {{ number_format($item['preco'], 2, ',', '.') }}</p>
                            </div>
                            <div class="card-action">
                                <form method="POST" action="{{ route('cart.remove') }}">
                                    @csrf
                                    <input type="hidden" name="code" value="{{ $item['produto_id'] }}">
                                    <button class="btn" type="submit" name="remove_from_cart">Remover</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <p>Total: R$ {{ number_format($total, 2, ',', '.') }}</p>

            <a class="btn" href="{{ route('products.index') }}">Continuar Comprando</a>
        @endif
    </div>

    @include('footer')
</body>

</html>

