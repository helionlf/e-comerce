@extends('layouts.layoutAdmin')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section>
            <form action="/cadastrar-produto/admin" method="POST">
                @csrf

                <label>Produto:</label>
                <input type="text" name="nome">
                <br><br>

                <label>Valor:</label>
                <input type="text" name="valor">
                <br><br>

                <label>Estoque:</label>
                <input type="text" name="estoque">
                <br><br>

                <button>Cadastrar produto</button>
            </form>
        </section>

        <section>
            <h2>Lista de Produtos</h2>
            <div class="container_produtos">
                @foreach ($produto as $prod)
                    <p>Nome: {{ $prod->nome }}</p>
                    <p>Valor: {{ $prod->valor }}</p>
                    <p>Estoque: {{ $prod->estoque }}</p>
                    <a href="/detalhes-produto/admin/{{$prod->id}}">ver detalhes</a>
                    <a href="/editar-produto/admin/{{$prod->id}}">editar</a>
                    <a href="/excluir-produto/admin/{{$prod->id}}">excluir</a>
                    <hr>
                @endforeach
            </div>
        </section>
    </main>
@endsection
