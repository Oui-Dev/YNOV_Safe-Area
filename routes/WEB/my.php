<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My\DashboardController;
use App\Http\Controllers\My\UserController;

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
    'as' => "my.",
    'middleware' => ['auth', 'permission:my_access|admin_access|root']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('auth.dashboard.index');
    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
    Route::get("/users/create", [UserController::class, 'create'])-> name('auth.users.create');
    Route::post("/users/create", [UserController::class, 'store'])-> name('auth.users.create.post');
});
