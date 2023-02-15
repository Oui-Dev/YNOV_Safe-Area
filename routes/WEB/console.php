<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Console\DashboardController;
use App\Http\Controllers\My\ProfilController;
use App\Http\Controllers\My\HelpDeskController;

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

// Console routes
Route::group([
    'as' => "console.auth.",
    'middleware' => ['auth', 'role:root']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Profile
    Route::group([
        'prefix' => 'profile',
        'as' => 'profil.',
        'controller' => ProfilController::class
    ], function () {
        Route::get('/', 'profil')->name('show');
        Route::put('/', 'editProfil')->name('update');
        Route::put('/password', 'editPassword')->name('password');
    });

    // Helpdesk
    Route::group([
        'prefix' => 'helpdesk',
        'as' => 'helpDesk.',
        'controller' => HelpDeskController::class
    ],function () {
        Route::get('/', 'list')->name('list');
        Route::get('/{ticket:id}', 'show')->name('show');
        Route::put('/{ticket:id}', 'update')->name('update');
    });
});