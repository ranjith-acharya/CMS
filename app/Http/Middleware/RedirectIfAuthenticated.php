<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
			case 'student':
				if(Auth::guard($guard)->check()){
					return redirect()->route('student.index');
				}
				break;
			case 'staff':
				if(Auth::guard($guard)->check()){
					return redirect()->route('staff.index');
				}
				break;
			default:
				if(Auth::guard($guard)->check()){
					return redirect()->route('home.index');
				}
				break;
		}
		return $next($request);
    }
}
