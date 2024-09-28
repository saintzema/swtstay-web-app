<?php

namespace App\Http\Middleware;

use App\Enums\UserRoles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureHotelOwnerSetup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        // Check if the user is a hotel owner and hasn't created a hotel
        if ($user && $user->role === UserRoles::HOTEL_OWNER->value && !$user->hotelOwner->hotel) {
            session()->flash('status', 'You would have to setup your hotel before proceeding to you dashboard');
            return redirect()->route('hotel.setup');
        }

        return $next($request);
    }
}
