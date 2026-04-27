<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // belum login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // salah role
        if (Auth::user()->role !== $role) {
            return redirect('/')->with('error', 'Akses ditolak');
        }

        return $next($request);
    }
}