<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UserRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user && $user->role === UserRoles::ADMIN->value) {
            Log::info('Redirecting to admin dashboard');
            return $next($request);
        }
        return redirect()->route('index');

    }
}
