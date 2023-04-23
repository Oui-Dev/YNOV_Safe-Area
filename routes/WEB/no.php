<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\No\StaticViewController;
use App\Http\Controllers\No\ContactController;
use App\Http\Controllers\No\MobileAppController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// No routes
Route::group([
    'as' => "no.public."
], function () {
    Route::get('/', [StaticViewController::class, 'homepage'])->name('homepage');
    Route::get('/prices', [StaticViewController::class, 'prices'])->name('prices');
    Route::get('/app', [MobileAppController::class, 'create'])->name('mobileApp');
    Route::get('/app/download/android', [MobileAppController::class, 'store'])->name('mobileApp.download.android');
    Route::get('/contact', [ContactController::class, 'create'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::post('/newsletters', [NewsletterController::class, 'store'])->name('newsletters.store');
    Route::get('/policy', [StaticViewController::class, 'showLegal'])->name('legal');
    Route::get('/changelog', [StaticViewController::class, 'changelog'])->name('changelog');
    Route::get('/termofservice', [StaticViewController::class, 'termofservice'])->name('termofservice');
    Route::get('/cgu', [StaticViewController::class, 'cgu'])->name('cgu');



    // Login + Logout handling
    Route::group([
        'middleware' => 'guest',
        'controller' => AuthenticatedSessionController::class
    ], function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store')->name('login.store');
    });

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');
});


// To delete
Route::get('/maintenance', [StaticViewController::class, 'maintenance'])->name('public.maintenance');
