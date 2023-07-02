<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   


    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        //  Pengecualian untuk rute /login dan /register
        if ($request->is('/') || $request->is('login') || $request->is('register')) {
            return $next($request);
        }
        $user = $request->user();
        
        // Memeriksa apakah peran pengguna saat ini termasuk dalam daftar peran yang diizinkan
        if (!in_array($user->role, $roles)) {
            // dd($user->role); // Mencetak peran pengguna saat ini untuk debug (opsional)
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }

}
