<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {

       //dd($guard);
        switch ($guard) {


            case 'admin':
            if (Auth::guard($guard)->check()) {
                return redirect('ut-admin/home');
            }
            break;

            case 'influencer':
                if (Auth::guard($guard)->check()) {
                    return redirect('/influencer');
                }
                break;

            case 'brand':
                if (Auth::guard($guard)->check()) {
                    return redirect('/brand');
                }
                break;


        }


        return $next($request);
    }
}
