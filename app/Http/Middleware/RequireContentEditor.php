<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class RequireContentEditor
{
    public function handle($request, Closure $next, string $model)
    {
        // Public content stays readable; both edit screens and writes require permission.
        if (!$request->isMethodSafe() || $request->routeIs('*.create', '*.edit')) {
            Gate::authorize('update', $model);
        }

        return $next($request);
    }
}
