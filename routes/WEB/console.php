<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Console\DashboardController;
use App\Http\Controllers\Console\CompanyController;

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
    'middleware' => ['auth', 'permission:root']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('auth.dashboard.index');
    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
    Route::get('companies', [CompanyController::class, 'list'])->name('auth.companies.list');
    Route::get('companies/create', [CompanyController::class, 'create'])->name('auth.companies.create');
    Route::post('companies/create', [CompanyController::class, 'store'])->name('auth.companies.create.post');
});