<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $produtos = Produto::take(3)->get();
        return view('user/inicio', ['produto' => $produtos]);
    }
}
