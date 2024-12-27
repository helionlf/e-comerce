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
                <div class="row container">
                    @foreach ($produto as $prod)

                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src=" {{ $prod->imagem }} ">
                                    <span class="card-title">{{ $prod->nome }}</span>
                                    <a title="Ver detalhes" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                                </div>
                                <div class="card-content">
                                    <p>{{ Str::limit($prod->descricao, 15) }}</p>
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
                                        <input type="hidden" name="imagem" value="{{$prod->imagem}}">
                                        <button class="btn orange">Carrinho</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Footer já está incluído no layout -->
@endsection
