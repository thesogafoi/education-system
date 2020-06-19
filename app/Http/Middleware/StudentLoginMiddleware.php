<?php

namespace App\Http\Middleware;

use Closure;

class StudentLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->guard('student')->check()) {
            return $next($request);
        } else {
            return redirect(route('login'));
        }
    }
}
