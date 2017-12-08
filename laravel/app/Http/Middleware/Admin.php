<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->email != "asky.gm@gmail.com"){
            session()->flash('message', 'Запрашиваемая страница доступна только администратору сайта!');
            
            return back();
        }

        return $next($request);
    }
}
