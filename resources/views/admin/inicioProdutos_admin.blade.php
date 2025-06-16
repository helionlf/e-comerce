@extends('layouts.layoutAdmin')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section class="container">
            <form action="/cadastrar-produto/admin" method="POST">
                @csrf

                <label>Produto:</label>
                <input type="text" name="nome">
                <br>

                <label>Descrição:</label>
                <input type="text" name="descricao">
                <br>

                <label>Valor:</label>
                <input type="text" name="valor">
                <br>

                <label>Categoria:</label>
                <input type="number" name="id_categoria" min="1" max="5">
                <br>

                <label>Slog:</label>
                <input type="text" name="slug">
                <br>

                <label>Imagem:</label>
                <input type="text" name="imagem" placeholder="Url">
                <br>

                <label>Estoque:</label>
                <input type="text" name="estoque">
                <br>

                <button class="btn orange">Cadastrar produto</button>
            </form>
        </section>

        <section>
            <form action="/inicio/admin" method="GET">
                @csrf
                <input type="text" name="search" placeholder="O que você está procurando?">
                <button class="btn blue" type="submit">Buscar <i class="material-icons right">search</i></button>
            </form>
        </section>

        <section>
            <h2 class="center">Lista de Produtos</h2>
            <div class="container_produtos">
                <div class="row container">
                    @foreach ($produto as $prod)

                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ $prod->imagem }}">
                                    <span class="card-title">{{ $prod->nome }}</span>
                                    <a href="/detalhes-produto/admin/{{$prod->id}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                                </div>
                                <div class="card-content">
                                    <p>{{ Str::limit($prod->descricao, 15) }}</p>
                                    <br>
                                    <p>Valor: {{ $prod->valor }}</p>
                                    <p>Estoque: {{ $prod->estoque }}</p>
                                    <a class="btn orange" href="/editar-produto/admin/{{$prod->id}}">editar <i class="material-icons left">create</i></a>
                                    <a class="btn red" href="/excluir-produto/admin/{{$prod->id}}">excluir <i class="material-icons left">delete</i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
