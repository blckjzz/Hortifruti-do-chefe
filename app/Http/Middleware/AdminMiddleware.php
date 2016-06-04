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

        if(Auth::user()->isAdmin() == true){
            return $next($request);
            //redirecionar para painel de admin
            //redirecionar para painel de usuario comum
        }else{
            abort(403,'Acesso não permitido');
        }
    }
}
