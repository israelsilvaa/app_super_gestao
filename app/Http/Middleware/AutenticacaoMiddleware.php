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
    public function handle($request, Closure $next)
    {
        // usuario autenticado???
        if(True){
            return $next($request);
        }else{
            return response('Acesso negado, rota exige autenticação!');
        }
    }

}
