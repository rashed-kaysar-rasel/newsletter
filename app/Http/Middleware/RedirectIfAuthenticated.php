<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                
                $user = Auth::user();

                $adminRole = Role::where('slug', 'admin')->first();
                $userRoles = $user->roles;
        
                if ($userRoles->contains($adminRole)) {
                    return redirect(route('admin.dashboard'));
                }else{
                    return redirect(route('user.dashboard'));
                }
            }
        }

        
        return $next($request);
    }
}
