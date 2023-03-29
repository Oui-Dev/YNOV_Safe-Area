<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Console\DashboardController;
use App\Http\Controllers\Console\CompanyController;
use App\Http\Controllers\Console\ChangelogController;

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

    // Companies
    Route::group([
        'prefix' => 'companies',
        'as' => "companies.",
        'controller' => CompanyController::class,
    ], function () {
        Route::get('/', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('create.post');
        Route::get('/edit/{company}', 'edit')->name('edit');
        Route::put('/edit/{company}', 'editPut')->name('edit.put');
        Route::delete('/delete/{company}', 'delete')->name('delete');
    });

    Route::group([
        'prefix' => 'changelog',
        'as' => 'changelog.',
        'controller' => ChangelogController::class,
    ], function () {
        Route::get('/', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('create.post');
        Route::get('/edit/{version}', 'edit')->name('edit');
        Route::put('/edit/{version}', 'editPut')->name('edit.put');
    });
});
