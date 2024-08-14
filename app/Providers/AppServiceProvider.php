<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
           URL::forceScheme('https');
        };

        setlocale(LC_ALL, 'IND');
        // DB::statement("SET lc_time_names = 'id_ID'");
        Paginator::useBootstrapFive();
        Carbon::setLocale('id');
    }
}
