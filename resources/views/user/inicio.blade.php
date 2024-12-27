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
                                    <p>Valor: {{ $prod->valor }}</p>
                                    <p>Estoque: {{ $prod->estoque}}</p>

                                    <form action="carrinho" method="POST" enctype="multipart/form-data">
                        
                                        @csrf
                                        <input type="hidden" name="id" value="{{$prod->id}}">
                                        <input type="hidden" name="nome" value="{{$prod->nome}}">
                                        <input type="hidden" name="valor" value="{{$prod->valor}}">
                                        <input type="number" name="quantidade" value="1" min="1" max="{{$prod->estoque}}">
                                        <input type="hidden" name="estoque" value="{{$prod->estoque}}">
                                        <button class="btn orange btn-large">Adicionar ao carrinho</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                
                    {{-- <p>Nome: {{ $prod->nome }}</p>
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
                    <hr> --}}
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer já está incluído no layout -->
@endsection
