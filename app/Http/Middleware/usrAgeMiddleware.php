<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon; // Include Class in COntroller
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class usrAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $birthDate = Auth::user()->date_of_birth;
        $age = Carbon::parse($birthDate)->diff(Carbon::now())->y;

        if ($age > 30) {
            return $next($request);
        }
        return redirect()->back()->with('midError', 'Your Age has No Access');
    }
}