<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!empty(Auth::user()->role)) {
            if (!Auth::check() || Auth::user()->role !== $role) {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
