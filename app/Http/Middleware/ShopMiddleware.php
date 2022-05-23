<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShopMiddleware
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
        if(!empty(auth()->user()) && auth()->user()->role == "shop_owner" && auth()->user()->publication_status == "1"){
            return $next($request);
        }elseif(!empty(auth()->user())){
            return redirect('404');
        }
        return redirect('login');
    }
}