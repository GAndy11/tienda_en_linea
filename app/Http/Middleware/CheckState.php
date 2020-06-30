<?php

namespace App\Http\Middleware;

use Closure;

class CheckState
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
        // Validación del estado del usuario 
        if (auth()->check() && auth()->user()->state == 0) {

            auth()->logout(); // Se desloguea para hacer el redirect a la página principal.
            return redirect('/');
        }
        
        return $next($request);
    }
}
