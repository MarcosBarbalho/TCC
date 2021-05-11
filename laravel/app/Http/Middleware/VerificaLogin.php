<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificaLogin
{
    /**
     * Handle que verifica se está logado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $logado = false;
        if($logado)
            return $next($request);
        else
            return redirect('/login');
    }
}
