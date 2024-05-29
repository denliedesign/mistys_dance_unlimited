<?php

namespace App\Http\Middleware;

use App\Placement;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserOwnsPlacement
{
    public function handle(Request $request, Closure $next)
    {
        $placement = Placement::findOrFail($request->route('placement'));  // Assuming 'placement' is the route parameter

        if (auth()->check() && auth()->user()->email == $placement->email) {
            return $next($request);
        }

        // Optionally, return a specific error or redirect to a different page
        return redirect()->route('/')->withErrors('You do not have permission to access this page.');
    }
}
