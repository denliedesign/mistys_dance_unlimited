<?php

namespace App\Http\Middleware;

use App\Placement;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // Normalize user email
        $normalizedEmail = strtolower(trim($user->email));
        list($localPart, $domain) = explode('@', $normalizedEmail);
        $parentEmailPattern = $localPart . '%@' . $domain;

        // Check if there are placements associated with this email pattern
        $placements = Placement::where('email', 'LIKE', $parentEmailPattern)->get();

        if ($placements->isEmpty()) {
            // No placement associated; redirect to a friendly error page
            return response()->view('errors.no_placement');
        }

        // Ensure we're not already on the placements.showAll route
        if ($request->route()->getName() !== 'placements.showAll') {
            // Redirect to the general placements show page
            return redirect()->route('placements.showAll');
        }

        return $next($request);
    }
}
