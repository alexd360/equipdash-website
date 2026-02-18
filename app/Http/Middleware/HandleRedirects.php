<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class HandleRedirects
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = '/' . ltrim($request->path(), '/');

        try {
            $redirects = Cache::remember('redirects', 3600, function () {
                return Redirect::where('is_active', true)->pluck('to_path', 'from_path')->toArray();
            });
        } catch (\Throwable $e) {
            return $next($request);
        }

        if (isset($redirects[$path])) {
            $redirect = Redirect::where('from_path', $path)->where('is_active', true)->first();
            $statusCode = $redirect ? $redirect->status_code : 301;
            return redirect($redirects[$path], $statusCode);
        }

        return $next($request);
    }
}
