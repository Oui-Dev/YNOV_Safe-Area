<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Guard;
use Laravel\Cashier\Cashier;

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

//             $x_categories = Categorie::where('archived_at',null)->where('societe_id',1)->get();
//             $view->with('x_categories', $x_categories);

             $version = new Version();
             if(!empty($version->active()))
             {
                 $view->with('version', $version->active());
             }
         });
        Cashier::ignoreMigrations();
        Cashier::useCustomerModel(User::class);
        Cashier::calculateTaxes();
    }
}
