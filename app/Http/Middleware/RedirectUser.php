<?php

namespace App\Http\Middleware;

use App\Placement;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class RedirectUser
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if ($user->email === 'customdenlie@gmail.com') {
            // Admin user; let them proceed to the route as usual
                return $next($request);
        }

        // Check if there is a placement associated with this email
        $placement = Placement::where('email', $user->email)->first();
        if (!$placement) {
            // No placement associated; redirect to a friendly error page
            return response()->view('errors.no_placement');
        }

        if ($request->is('placements/' . $placement->id)) {
            return $next($request);
        }

        // Redirect to their specific placement show page
        return redirect()->route('placements.show', $placement->id);
    }
}
