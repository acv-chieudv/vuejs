<?php

namespace App\Vue\Providers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
class VueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Custom to logs query form database
        //$this->databaseLogger();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register services
    }


}
