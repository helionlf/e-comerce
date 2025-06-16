<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = \Cart::getContent();
        return view('user/carrinho', ['itens' => $itens]);
    }

    public function adicionarCarrinho(Request $request) {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->nome,
            'price' => $request->valor,
            'quantity' => $request->quantidade,
            'attributes' => array(
                'estoque' => $request->estoque,
                'imagem' => $request->imagem
            )
        ]);

        return redirect('/inicio')->with('sucesso', 'Produto adicionado ao carrinho com ducesso!');
    }

    public function removerCarrinho(Request $request) {
        \Cart::remove($request->id);
        return redirect('/carrinho')->with('sucesso', 'Produto removido do carrinho com ducesso!');
    }
}
