<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
   public function index()
   {
      return view('site.login', ['titulo' => 'login']);
   }

   public function autenticar(Request $request)
   {
      // regras de validação
      $regras = [
         'usuario'=> 'email',
         'senha' => 'required'
      ];

      // mensagem de feedback de validação
      $feedback = [
         'usuario.email' => 'informe um email válido',
         'senha.required' => 'o campo senha é obrigatório'
      ];

      $request->validate($regras, $feedback);

      print_r($request->all());
   }
}
