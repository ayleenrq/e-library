<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = null): Response
    {
        $userRole = Session::get('role');

        if (!$userRole) {
            return redirect()->route('login');
        }
        if ($role && strtoupper($userRole) !== strtoupper($role)) {
            return redirect()->route('logout');
        }
        
        return $next($request);
    }
}
