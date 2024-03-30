<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAcesso;

class LogAcessorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		
		$ip = $request->server->get('REMOTE_ADDR');
		$rota = $request->getRequestUri();
		LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);
        //return $next($request);
		$resposta = $next($request);
		$resposta->setStatusCode(250, 'Status e texto modificados em LogAcesso');
		return $resposta;

		//O return faz com que a interface seja exibida novamente já com os dados alterados
		//Podemos usar o dd($resposta) para verificar os dados enquanto alteramos 
	}
}
