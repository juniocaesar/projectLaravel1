<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action
        echo("<script>console.log('Debug Objects: " . "beforeMiddleWare" . "' );</script>");
        return $next($request);
    }
}