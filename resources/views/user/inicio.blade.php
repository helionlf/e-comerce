@extends('layouts.layoutUser')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        @if ($mensagem = Session::get('sucesso'))
        {{ $mensagem }}
        @endif

        {{-- <section>
            <div class="row container">
                <div class="col s12 m12">
                  <div class="card grey lighten-5">
                    <div class="card-content white-text">
                      <span class="card-title">Card Title</span>
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
            </div>
        </section> --}}

        <section>
            <h2 class="center"><span style="color: #f44336">Liberdade</span> peças</h2>
            <div class="container_produtos">
                <div class="row container">
                    @foreach ($produto as $prod)

                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src=" {{ $prod->imagem }} ">
                                    <span class="card-title">{{ $prod->nome }}</span>
                                    <a href="/detalhes-produto/{{$prod->id}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
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
                                        <button class="btn orange">Carrinho <i class="material-icons right">shopping_cart</i></button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <ul class="pagination center">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active red"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>
        </section>
    </main>

    <!-- Footer já está incluído no layout -->
@endsection
