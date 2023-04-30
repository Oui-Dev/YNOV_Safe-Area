<?php

namespace App\Providers;

use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Guard;

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
    public function boot(Guard $auth)
    {
        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        view()->composer('*', function ($view) use ($auth) {
            $view->with('user', $auth->user());

            $version = Version::orderBy('created_at', 'desc')->first();
            if(!empty($version)) {
                $view->with('version', $version);
            }
        });
    }
}
