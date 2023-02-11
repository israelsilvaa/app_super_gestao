<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo 'Metodo de autenticação para essa rota: '.$metodo_autenticacao.' - ' .$perfil. '<br>';
        // usuario autenticado???

        if($metodo_autenticacao == 'padrao'){
            echo 'verificar usuario e senha no banco de dados - ' .$perfil.'<br>';
        }elseif($metodo_autenticacao == 'eldap'){
            echo 'verificar usuario e senha AD - ' .$perfil.' <br>';
        }

        if(false){
            return $next($request);
        }else{
            return response('Acesso negado, rota exige autenticação!');
        }
    }

}
