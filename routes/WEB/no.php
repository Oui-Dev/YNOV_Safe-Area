<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\No\StaticViewController;
use App\Http\Controllers\TempController;

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
    Route::get('/features', [StaticViewController::class, 'features'])->name('public.features');
    Route::get('/prices', [StaticViewController::class, 'prices'])->name('public.prices');
    Route::get('/contact', [StaticViewController::class, 'contact'])->name('public.contact');
    Route::prefix('/public')->group(function () {
        Route::get('/changelog', [StaticViewController::class, 'changelog'])->name('public.changelog');
    });
});
Route::group([
    'middleware' => 'guest'
], function () {
    Route::prefix('/public')->group(function () {
        Route::post('/newsletters', [NewsletterController::class, 'store'])->name('no.public.newsletters.store');
    });
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

});
Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
