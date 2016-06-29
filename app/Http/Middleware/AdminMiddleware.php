<?php

namespace hortifruti\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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

        //redirecionar para painel de admin
        if(Auth::user()->nivelAcesso() == 1){
            return $next($request);
        }else{
            abort(403,'Acesso não permitido');
        }
    }
}
