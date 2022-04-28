<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Admin
{


    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if(Auth::user()->role == 1)
        {
            return $next($request);
        }

        //return redirect()->route('home');
        abort(403);
    }
}
