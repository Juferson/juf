<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\Auth; 

class ScholarMiddleware
{
    public function handle(Request $request, Closure $next): Response 
    {
        if (Auth::check()) {
            if (Auth::user()->is_role == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect(url('/'));
            }
        } else {
            Auth::logout();
            return redirect(url('/'));
        }
    }
}
