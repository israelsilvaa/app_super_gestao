<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\User;

class LoginController extends Controller
{
   public function index(Request $request)
   {
      $erro = '';

      if($request->get('erro') == '1'){
         $erro = 'usuario ou senha não existe.';
      }

      return view('site.login', ['titulo' => 'login', 'erro'=> $erro]);
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
      $email = $request->get('usuario');
      $senha = $request->get('senha');
      echo 'usuario:' . $email . ' Senha:' . $senha;

      // iniciando o model User 
      $user = new User();

      $usuario = $user->where('email', $email)->where('password', $senha)->get()->first();

      if(isset($usuario->name)){
         echo 'logado';
      }else{
         return redirect()->route('site.login', ['erro'=> '1']);
      }

   }
}