<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FrameGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->header('X-Frame-Options', 'ALLOW FROM https://html5.gamedistribution.com');
        return $response;
    }
}
