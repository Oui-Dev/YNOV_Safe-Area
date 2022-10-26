<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            // Routes for landing pages => safearea.ml
            Route::domain(config('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/WEB/no.php'));

            // Routes for landing pages => www.safearea.ml
            Route::domain('www.' . config('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/WEB/no.php'));

            // Routes for client => my.safearea.ml
            Route::domain('my.' . config('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/WEB/my.php'));

            // Routes for Administration => admin.safearea.ml
            Route::domain('admin.' . config('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/WEB/administration.php'));

            // Routes for Console => console.safearea.ml
            Route::domain('console.' . config('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/WEB/console.php'));

            // Routes for API => api.safearea.ml
            Route::domain('api.' . config('app.domain'))
                ->middleware('api')
                ->prefix('/v1')
                ->group(base_path('routes/api.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
