<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExceptionHandlers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $statusCode = $this->getStatusCode($request);

        if ($statusCode == 400) {
            return response()->view('layout.400', [], 400);
        }

        if ($statusCode == 404) {
            return response()->view('layout.404', [], 404);
        }

        if ($statusCode == 503) {
            return response()->view('layout.maintenance', [], 503);
        }

        return $next($request);
    }

    protected function getStatusCode($request)
    {
        return method_exists($request, 'getStatusCode') ? $request->getStatusCode() : 200;
    }
}
