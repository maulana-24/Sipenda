<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AksesGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika sudah login atau bukan guest
        if (Auth::check()) {
            // jika Admin ke dashboard, client ke profile
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard')->withErrors('Cannot access. You are still in the login session');
            } 
            else {
                return redirect('profile')->withErrors('Cannot access. You are still in the login session');
            }
        }

        // jika Guest
        return $next($request);
    }
}
