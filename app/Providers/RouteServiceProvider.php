<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';

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
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAuthRoutes();
        $this->mapServiceRoutes();
        $this->mapUnrestrictedAreaRoutes();
        $this->mapRestrictedAreaRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapAuthRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/auth.php'));
    }

    protected function mapServiceRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace.'\Service')
            ->group(base_path('routes/web-socialite-service.php'));
    }

    protected function mapUnrestrictedAreaRoutes()
    {
        Route::middleware(['web','locale'])
            ->namespace($this->namespace.'\UnrestrictedArea')
            ->group(base_path('routes/web-socialite-unrestricted-area.php'));
    }

    protected function mapRestrictedAreaRoutes()
    {
        Route::middleware(['web','locale','auth'])
            ->prefix('protected')
            ->namespace($this->namespace.'\RestrictedArea')
            ->group(base_path('routes/web-socialite-restricted-area.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
