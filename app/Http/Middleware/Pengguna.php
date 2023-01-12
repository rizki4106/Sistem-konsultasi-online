<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Pengguna
{
    /**
     * Handle an incoming request.
     * Redirect user ke halaman login jika mereka belum login
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(!$request->session()->has("user_id")){
            return redirect("/login")->with("failed", "please login");
        }
        return $next($request);
    }
}
