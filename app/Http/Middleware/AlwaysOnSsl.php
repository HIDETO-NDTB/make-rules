<?php

namespace App\Http\Middleware;

use Closure;

class AlwaysOnSsl
{
    
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && !config('app.debug'))
        {
            return redirect()->secure($request->path());
        }
        return $next($request);
    }
}
