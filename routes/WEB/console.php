<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Console\DashboardController;
use App\Http\Controllers\My\ProfilController;

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
    'as' => "console.",
    'middleware' => ['auth', 'role:root']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('auth.dashboard.index');

    Route::get('/profil', [ProfilController::class, 'profil'])->name('auth.dashboard.profil');
    Route::put('/profil', [ProfilController::class, 'editProfil'])->name('auth.dashboard.profil.update');
    Route::put('/profil/password', [ProfilController::class, 'editPassword'])->name('auth.dashboard.profil.password');

    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
});