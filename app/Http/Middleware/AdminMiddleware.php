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

        if(Auth::user()->isAdmin() == 0){
            return $next($request);
        }else{
            abort(403,'Acesso não permitido');
        }
    }
}
