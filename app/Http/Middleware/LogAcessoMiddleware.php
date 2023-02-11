<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
use GuzzleHttp\Middleware;

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
        $ip = $request->server->get('REMOTE_ADDR');
        // $rota = $request->server->get('REQUEST_URI');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "O IP:$ip requisitou a rota: $rota"]);
    

        $reposta = $next($request);

        $reposta->setStatusCode(201, 'o status da resposta e o texto foram modificados');

        // dd($reposta);
        return $reposta;
        // resposta - manipular
    }
}
