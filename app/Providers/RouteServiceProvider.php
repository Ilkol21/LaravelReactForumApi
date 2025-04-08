<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Traits\ForwardsCalls;

class RouteServiceProvider extends ServiceProvider
{
    use ForwardsCalls;

//    protected $namespace;
//    protected $load;
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api')
            ->group(function () {
                require base_path('routes/api.php');
            });
    }
}
