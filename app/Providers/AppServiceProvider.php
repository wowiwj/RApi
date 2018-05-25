<?php

namespace App\Providers;

use App\Base\Response;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // set api formatter
        $this->app->singleton(Response::class,function ($app){

//            dd(config('sapi'));

            return new  Response([]);

        });

    }
}
