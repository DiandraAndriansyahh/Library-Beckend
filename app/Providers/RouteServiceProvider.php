<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        $this->routes(function () {

            // API ROUTES (INI YANG PENTING 🔥)
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            // WEB ROUTES
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}