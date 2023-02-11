<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
class LogAcessoMiddleware
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
        // request - manipular
        #return $next($request);
        $ip = $request->server->get('REMOTE_ADDR');
        // $rota = $request->server->get('REQUEST_URI');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "O IP:$ip requisitou a rota: $rota"]);
        return response('teste de moddlleware');
        // resposta - manipular
    }
}
