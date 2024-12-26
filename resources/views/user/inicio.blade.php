@extends('layouts.layoutUser')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        @if ($mensagem = Session::get('sucesso'))
        {{ $mensagem }}
        @endif

        <section>
            <h2>liberdade peças</h2>
            <div class="container_produtos">
                @foreach ($produto as $prod)
                    <p>Nome: {{ $prod->nome }}</p>
                    <p>Valor: {{ $prod->valor }}</p>
                    <p>Estoque: {{ $prod->estoque}}</p>
                    <form action="carrinho" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        <input type="hidden" name="id" value="{{$prod->id}}">
                        <input type="hidden" name="nome" value="{{$prod->nome}}">
                        <input type="hidden" name="valor" value="{{$prod->valor}}">
                        <input type="number" name="quantidade" value="1" min="1" max="{{$prod->estoque}}">
                        <input type="hidden" name="estoque" value="{{$prod->estoque}}">
                        <!-- adicionar input da imagem -->
                        <button>Adicionar ao carrinho</button>
                    </form>
                    <hr>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer já está incluído no layout -->
@endsection
