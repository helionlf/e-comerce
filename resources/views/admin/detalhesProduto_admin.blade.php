@extends('layouts.layoutAdmin')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section class="container">
            <label>Produto:</label>
                <input type="text" name="nome" value="{{$produto->nome}}">
                <br>

                <label>Descrição:</label>
                <input type="text" name="descricao" value="{{$produto->descricao}}">
                <br>
        
                <label>Valor:</label>
                <input type="text" name="valor" value="{{$produto->valor}}">
                <br>

                <label>Imagem:</label>
                <input type="text" name="imagem" value="{{$produto->imagem}}">
                <br>

                <label>Estoque:</label>
                <input type="text" name="estoque" value="{{$produto->estoque}}">
                <br>
        </section>
    </main>
@endsection
    
