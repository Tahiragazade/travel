<?php

namespace App\Providers;

use App\Interfaces\CarColorRepositoryInterface;
use App\Interfaces\CarRepositoryInterface;
use App\Interfaces\CustomerRepositoryInterface;
use App\Interfaces\RegionRepositoryInterface;
use App\Interfaces\TravelRepositoryInterface;
use App\Repositories\CarColorRepository;
use App\Repositories\CarRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\RegionRepository;
use App\Repositories\TravelRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
	    $this->app->bind(CarColorRepositoryInterface::class, CarColorRepository::class);
	    $this->app->bind(CarRepositoryInterface::class, CarRepository::class);
	    $this->app->bind(RegionRepositoryInterface::class, RegionRepository::class);
	    $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
	    $this->app->bind(TravelRepositoryInterface::class, TravelRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
