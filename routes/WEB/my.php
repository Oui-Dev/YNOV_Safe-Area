<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My\DashboardController;
use App\Http\Controllers\My\HelpDeskController;
use App\Http\Controllers\My\ComplainsController;
use App\Http\Controllers\My\UserController;
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

// My + Admin routes
Route::group([
    'as' => "my.auth.",
    'middleware' => ['auth', 'role:my|admin']
], function () {
    Route::put('/complains/list/delete/{complain:id}', [ComplainsController::class, 'delete'])->name('auth.complains.list.delete');
    Route::get('/complains/list',[ComplainsController::class , 'list'])->name('auth.complains.list');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/users/list', [UserController::class, 'list'])->name('users.list');

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
        'prefix' => 'helpDesk',
        'as' => 'helpDesk.',
        'controller' => HelpDeskController::class
    ], function () {
        Route::get('/new', 'create')->name('add');
        Route::post('/new', 'store')->name('add.post');
    });
});


// Admin routes
Route::group([
    'as' => "my.auth",
    'middleware' => ['auth', 'role:admin']
], function () {
    require __DIR__ . '/admin.php';
});
