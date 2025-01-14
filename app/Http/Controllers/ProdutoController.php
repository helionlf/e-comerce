<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('admin/inicioProdutos_admin', ['produto' => $produtos]);
    }

    public function cadastrar_produto(Request $request) {
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'categoria_id' => $request->id_categoria,
            'slug' => $request->slug,
            'imagem' => $request->imagem,
            'estoque' => $request->estoque,
        ]);

        return redirect('/inicio/admin');
    }

    public function detalhar_produto($id) {
        // $produto = Produto::find($id);
        $produto = Produto::with('categoria')->find($id);
        return view('user/detalhesProduto', ['produto' => $produto]);
    }

    public function ver_produto($id) {
        $produto = Produto::find($id);
        return view('admin/detalhesProduto_admin', ['produto' => $produto]);
    }

    public function editar_produto(Request $request, $id) {
        $produto = Produto::find($id);
    
        if ($request->isMethod('get')) {
            return view('admin/editarProduto_admin', ['produto' => $produto]);
        } elseif ($request->isMethod('post')) {
            $produto->update([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'valor' => $request->valor,
                'slug' => $request->slug,
                'imagem' => $request->imagem,
                'estoque' => $request->estoque,
            ]);
    
            return redirect('/inicio/admin');
        }
    }

    public function excluir_produto($id) {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/inicio/admin');
    }
}
