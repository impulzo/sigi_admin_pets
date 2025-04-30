<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

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
        Voyager::addAction(\App\Actions\HistoryButton::class);
		Voyager::addAction(\App\Actions\MedicalHistoryButton::class);
		Voyager::addAction(\App\Actions\VaccineButton::class);
		Voyager::addAction(\App\Actions\InscripcionButton::class);
    }
}
