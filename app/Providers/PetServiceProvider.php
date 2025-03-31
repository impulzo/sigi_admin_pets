<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Pet\GetMedicalHistoryService;

class PetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->singleton(GetMedicalHistoryService::class, GetMedicalHistoryService::class);
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
