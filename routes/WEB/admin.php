<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My\HelpdeskController;
use App\Http\Controllers\My\ComplainsController;
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

// Users
Route::group([
    'prefix' => 'users',
    'as' => 'users.',
    'controller' => UserController::class
], function () {
    Route::get("/new", 'create')->name('create');
    Route::post("/new", 'store')->name('create.post');
    Route::get('/edit/{user:reference}', 'edit')->name('edit');
    Route::put('/edit/{user:reference}', 'editPut')->name('edit.put');
    Route::delete('/delete/{user:reference}', 'delete')->name('delete');
});

// Complain
Route::group([
    'prefix' => 'complains',
    'as' => 'complains.',
    'controller' => ComplainsController::class
], function () {
    Route::put('/{complain:reference}', 'update')->name('edit.post');
    Route::get('/{complain:reference}', 'edit')->name('edit');
    Route::get('/download/{complain:reference}', 'download')->name('download');
    Route::post('/{complain:reference}', 'showAnonym')->name('anonymity');
    Route::get('/confirm/{token:token}', 'confirmAnonym')->name('confirm.anonym');
    Route::post('/confirm/{token:token}', 'updateAnonym')->name('update.anonym');
});
// Helpdesk
Route::group([
    'prefix' => 'helpdesk',
    'as' => 'helpdesk.',
    'controller' => HelpdeskController::class
], function () {
    Route::get('/{ticket:id}', 'show')->name('show');
});
