<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PPK
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('login');
        }

        $userRole = Auth::user()->role;

        // ROLE ADMINISTRATOR

        if($userRole == 1)
        {
            return redirect()->route('dashboard');
        }
        // ROLE KABAN
        if($userRole == 2)
        {
            return redirect()->route('kaban.dashboard');
        }
        // ROLE KABID PERBEN
        if($userRole == 3)
        {
            return redirect()->route('kabid.dashboard');
        }
        // ROLE VERIFIKATOR
        if($userRole == 4)
        {
            return redirect()->route('verifikator.dashboard');
        }
        // ROLE PPK
        if($userRole == 5)
        {
            return $next($request);
        }
        // ROLE BENDAHARA
        if($userRole == 6)
        {
            return redirect()->route('bendahara.dashboard');
        }
    }
}
