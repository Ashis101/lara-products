<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Userauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
        if($req->path() == "login" and $req->session()->has('user')){
            return redirect('/');
        }

        return $next($req);
    }
}
