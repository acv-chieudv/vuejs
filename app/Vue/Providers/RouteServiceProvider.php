<?php

namespace App\Vue\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Vue\Http\Controllers';
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapVueRoutes();
    }

    public function mapVueRoutes()
    {
        Route::middleware('public_group')
             ->namespace($this->namespace)
             ->group(base_path('routes/vue.php'));
    }
}
