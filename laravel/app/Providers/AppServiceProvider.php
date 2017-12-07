<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Link;
use App\Tag;

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
            $archives = Link::selectRaw('year(created_at) year, monthname(created_at) month, count(*) approved')
                            ->groupBy('year', 'month')
                            ->orderByRaw('min(created_at) desc')
                            ->get()
                            ->toArray();

            $tags = Tag::has('links')->get();
            
            $view->with(compact('archives', 'tags'));
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
