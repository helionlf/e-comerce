@extends('layouts.layoutUser')

@section('conteudo')
    <!-- Header já está incluído no layout -->

    <main>
        <section>
            <h2 class="center">Meu carrinho - {{$itens->count()}} produto(s)</h2>
            <div class="container_produtos">
                <div class="row container">

                    <table class="striped">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th></th>
                          </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($itens as $item)
                                <tr>
                                    <td><img src="{{ $item->attributes->imagem }}" alt="" width="70" class="responsive-img circle"></td>
                                    <td>{{ $item->name }}</td>
                                    <td><input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="{{ $item->attributes->get('estoque') }}"></td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <form action="/remover" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

            <div class="container">
                <a class="btn orange" href="/inicio">Continuar comprando <i class="material-icons right">add_shopping_cart</i></a>
                <button class="btn green">Finalizar compra <i class="material-icons right">payment</i></button>
            </div>
        </section>
    </main>

<!-- Footer já está incluído no layout -->
@endsection