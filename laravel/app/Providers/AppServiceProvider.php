<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Link;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                                        ->groupBy('year', 'month')
                                        ->orderByRaw('min(created_at) desc')
                                        ->get()
                                        ->toArray());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
