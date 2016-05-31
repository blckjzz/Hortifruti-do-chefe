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

        if(Auth::user()->isAdmin()){
            return $next($request);
        }else{
            abort(403,'Acesso não permitido');
        }
//        if(Auth::guest()){
//            return redirect('login');
//        }elseif(Auth::user()->nivelAcesso->id_nivel_acesso==1) {
//            return $next($request);
//        }else{
//            abort(403, 'Acesso negado.');
//        }
//        $user  = $request->user();
//        if($user->username->isAdmin){
//            return $next($request);
//        }
//        abort(404, 'Não permitido');
    }
}
