<?php

namespace App\Http\Middleware;

 

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            return redirect('/'); // Перенаправление на главную страницу, если не админ
        }

        return $next($request);
    }
}
