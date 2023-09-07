<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Common\Infrastructure\Laravel\Providers\RouteServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->register(RouteServiceProvider::class);
    }
}
