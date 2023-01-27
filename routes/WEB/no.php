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

Route::group([
    'as' => "no."
], function () {
    Route::get('/', [StaticViewController::class, 'homepage'])->name('public.homepage');
    Route::get('/prix', [StaticViewController::class, 'prices'])->name('public.prices');
    Route::get('/application', [MobileAppController::class, 'create'])->name('public.mobileApp');
    Route::get('/application/download/android', [MobileAppController::class, 'store'])->name('public.mobileApp.download.android');
    Route::get('/contact', [ContactController::class, 'create'])->name('public.contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('public.contact.store');
    Route::post('/newsletters', [NewsletterController::class, 'store'])->name('public.newsletters.store');
    Route::get('/mentions-legales', [StaticViewController::class, 'showLegal'])->name('public.legal');
    Route::get('/changelog', [StaticViewController::class, 'changelog'])->name('public.changelog');

    Route::group([
        'middleware' => 'guest'
    ], function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('public.login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('public.login.store');
    });

    Route::group([
        'middleware' => 'auth'
    ], function () {
        Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('public.logout');
    });
});


// To delete
Route::get('/maintenance', [StaticViewController::class, 'maintenance'])->name('public.maintenance');
