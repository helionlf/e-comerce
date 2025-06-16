@extends('layouts.layoutUser')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section class="container">
            <div>
                <img src="{{$produto->imagem}}" alt="{{$produto->nome}}">
            </div>
            <hr>

            <label>Produto:</label>
            <p>{{$produto->nome}}: <span style="color: #ff9800">R$ {{$produto->valor}}</span></p>
            <br>

            <p>{{$produto->descricao}}</p>

            <label>Estoque:</label>
            <p>{{$produto->estoque}}</p>
            <br>

            <form action="/carrinho" method="POST" enctype="multipart/form-data">
                        
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <input type="hidden" name="nome" value="{{$produto->nome}}">
                <input type="hidden" name="valor" value="{{$produto->valor}}">
                <input type="number" name="quantidade" value="1" min="1" max="{{$produto->estoque}}">
                <input type="hidden" name="estoque" value="{{$produto->estoque}}">
                <input type="hidden" name="imagem" value="{{$produto->imagem}}">
                <button class="btn orange">Carrinho <i class="material-icons right">shopping_cart</i></button>
            </form>

        </section>
    </main>
@endsection
    
