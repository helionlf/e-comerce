<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/inicio');
        } else {
            return redirect()->back()->with('erro', "Email ou senha inválida");
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/inicio');
    }

    public function cadastrarUsuario(Request $request){
        return view('user.cadastro');
    }
}
