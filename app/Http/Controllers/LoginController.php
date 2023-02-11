<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\User;

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
         'usuario' => 'email',
         'senha' => 'required'
      ];

      // mensagem de feedback de validação
      $feedback = [
         'usuario.email' => 'informe um email válido',
         'senha.required' => 'o campo senha é obrigatório'
      ];
      // validando dados do form
      $request->validate($regras, $feedback);

      // recuperando usuario e senha
      $usuario = $request->get('usuario');
      $senha = $request->get('senha');
      echo 'usuario:' . $usuario . ' Senha:' . $senha;

      // iniciando o model User 
      $user = new User();

      $existe = $user->where('email', $usuario)->where('password', $senha)->get()->first();

      if(isset($existe->name)){
         echo 'logado';
      }else{
         echo 'usuario não registrado';
      }
      echo '<pre>';
      print_r($existe);
      echo '<pre>';
   }
}
