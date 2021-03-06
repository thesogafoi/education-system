<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LogOutMiddleware
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
        if (Auth::guard('staff')->check() || Auth::guard('student')->check()) {
            if (Auth::guard('staff')->check()) {
                return redirect(route('staff.dashboard'))->with(['message' => 'ابتدا باید از اکانت خود خارج شید']);
            } elseif (Auth::guard('student')->check()) {
                return redirect(route('student.dashboard'))->with(['message' => 'ابتدا باید از اکانت خود خارج شید']);
            }
        } else {
            return $next($request);
        }
    }
}
