<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // if (!Auth::check()) {
        //     return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        // }

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                // Cek level user dan arahkan ke halaman yang sesuai
                $user = Auth::user();
                if ($user->level === 'admin') {
                    return redirect()->route('admin')->with('error', 'You had logged in as admin user.');
                } elseif ($user->level === 'owner') {
                    return redirect()->route('owner')->with('error', 'You had logged in as owner user.');
                } elseif ($user->level === 'kurir') {
                    return redirect()->route('courier')->with('error', 'You had logged in as courier user.');
                } else {
                    return redirect()->route('home');
                }
            }
        }

        return $next($request);
    }
}
