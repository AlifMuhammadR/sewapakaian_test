<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LevelMiddleware
{
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array(Auth::user()->level, $levels)) {
            return $next($request);
        }
        // Redirect sesuai role user
        $redirectRoutes = [
            'admin' => 'admin',
            'owner' => 'owner',
            'kurir' => 'courier',
        ];
        $userLevel = Auth::user()->level;

        if (isset($redirectRoutes[$userLevel])) {
            return redirect()->route($redirectRoutes[$userLevel])
                ->with('error', 'You do not have permission to access this page.');
        }

        return redirect()->route('login')->with('error', 'Access denied.');
    }
}
