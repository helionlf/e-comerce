@extends('layouts.layoutAdmin')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <form action="/editar-produto/admin/{{$produto->id}}" method="POST">
            @csrf
    
            <label>Produto:</label>
            <input type="text" name="nome" value="{{$produto->nome}}">
            <br><br>
    
            <label>Valor:</label>
            <input type="text" name="valor" value="{{$produto->valor}}">
            <br><br>
    
            <label>Estoque:</label>
            <input type="text" name="estoque" value="{{$produto->estoque}}">
            <br><br>
    
            <button>Salvar</button>
        </form>
    </main>
@endsection
