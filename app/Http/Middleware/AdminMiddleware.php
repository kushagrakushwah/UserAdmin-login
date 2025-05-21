<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Ensure the user is authenticated and is an admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // If not, deny access with a 403 Unauthorized error
        return redirect('/login');
    }
}
