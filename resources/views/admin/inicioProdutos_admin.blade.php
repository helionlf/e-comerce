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

                <button class="btn orange">Cadastrar produto</button>
            </form>
        </section>

        <section>
            <h2>Lista de Produtos</h2>
            <div class="container_produtos">
                @foreach ($produto as $prod)

                    <div class="row">
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image">
                                    {{-- <img src="images/sample-1.jpg"> --}}
                                    <span class="card-title">{{ $prod->nome }}</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                    <br>
                                    <p>Nome: {{ $prod->nome }}</p>
                                    <p>Valor: {{ $prod->valor }}</p>
                                    <p>Estoque: {{ $prod->estoque }}</p>
                                    <a class="btn orange" href="/detalhes-produto/admin/{{$prod->id}}">ver detalhes</a>
                                    <a class="btn orange" href="/editar-produto/admin/{{$prod->id}}">editar</a>
                                    <a class="btn orange" href="/excluir-produto/admin/{{$prod->id}}">excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <p>Nome: {{ $prod->nome }}</p>
                    <p>Valor: {{ $prod->valor }}</p>
                    <p>Estoque: {{ $prod->estoque }}</p>
                    <a href="/detalhes-produto/admin/{{$prod->id}}">ver detalhes</a>
                    <a href="/editar-produto/admin/{{$prod->id}}">editar</a>
                    <a href="/excluir-produto/admin/{{$prod->id}}">excluir</a>
                    <hr> --}}
                @endforeach
            </div>
        </section>
    </main>
@endsection
