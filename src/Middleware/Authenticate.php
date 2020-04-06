<?php


namespace Rs\RsAdmin\Middleware;


use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guard('admin')->guest())
            return redirect(route('admin.login'));

        return $next($request);
    }
}
