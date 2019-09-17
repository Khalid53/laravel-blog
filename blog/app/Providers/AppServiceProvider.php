<?php

namespace App\Providers;
use View;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('key', 'value');                            //syntax
        //View::share('name', 'Mohammad Abdul Khalek');          // For all view pages
//        View::composer('* or view path', function ($view) {
//            $view->with('name','Abdur Rahman');                 //Only one page or all pages
//        });
        View::composer('front-end.includes.header', function ($view) {
            $view->with('categories', Category::where('publication_status',1)->get() );
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
