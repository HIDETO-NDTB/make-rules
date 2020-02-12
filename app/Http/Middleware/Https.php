<?php

namespace App\Http\Middleware;

use Closure;

class Https
{
    
    public function handle($request, Closure $next)
    {
        if (!$request->secure()&&env('APP_ENV') === 'production') {
            return redirect()->secure($request->getRequestUri(), 301);
        }
        return $next($request);
    }
}
