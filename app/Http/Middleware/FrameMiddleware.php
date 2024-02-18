<?php

namespace App\Http\Middleware;

class FrameMiddleware 
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->header('Content-Security-Policy', 'frame-ancestors https://estaaqdem.com/');
        return $response;
    }
}
