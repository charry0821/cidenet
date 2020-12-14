<?php

namespace App\Providers;

use App\Models\Empleado;
use App\Observers\EmpleadoObserver;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Empleado::observe(EmpleadoObserver::class);
    }
}
