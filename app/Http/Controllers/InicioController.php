<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $request){
        if ($request->input('search')) {
            $search = $request->input('search');
            $produtos = Produto::where('nome', 'like', "%{$search}%")
                ->orWhere('descricao', 'like', "%{$search}%")
                ->get();
         } else {
            $produtos = Produto::take(3)->get();
        }

        return view('user/inicio', ['produto' => $produtos]);
    }
}
