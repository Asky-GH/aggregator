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
            $archives = Link::selectRaw('year(updated_at) year, monthname(updated_at) month, count(*) approved')
                            ->groupBy('year', 'month')
                            ->orderByRaw('min(updated_at) desc')
                            ->get()
                            ->toArray();

            $tags = Tag::has('links')->get();
            
            $view->with(compact('archives', 'tags'));
        });

        view()->composer('links.edit', function($view){
            $view->with('tags', Tag::all());
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
