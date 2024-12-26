@extends('layouts.layoutUser')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section>
            <h2>Meu carrinho - {{$itens->count()}} produtos</h2>
            <div class="container_produtos">
                @foreach ($itens as $item)
                    <p>Nome: {{ $item->name }}</p>
                    <p>Valor: {{ $item->price }}</p>
                    <p>Estoque: {{ $item->attributes->get('estoque') }}</p>
                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="{{ $item->attributes->get('estoque') }}">

                    <form action="/remover" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button>Remover produto</button>
                    </form>

                    <!-- colocar o da imagem -->
                    <hr>
                @endforeach
            </div>

            <button>Continuar comprando</button>
            <button>Finalizar compra</button>
        </section>
    </main>

<!-- Footer já está incluído no layout -->
@endsection