<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MedicalHistory\GetVaccineService;

class PetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->singleton(GetVaccineService::class, GetVaccineService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
