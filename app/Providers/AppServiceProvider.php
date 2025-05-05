<?php

namespace App\Providers;
use App\Models\Plaque;
use App\Models\Company;
use App\Observers\PlaqueObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\CompanyObserver;


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
        Plaque::observe(PlaqueObserver::class);
        Company::observe(CompanyObserver::class);


    }
}
