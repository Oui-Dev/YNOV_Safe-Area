<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My\HelpDeskController;
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
    Route::get('/', 'list')->name('list');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')-> name('create.post');
});

// Helpdesk
Route::group([
    'prefix' => 'helpdesk',
    'as' => 'helpDesk.',
    'controller' => HelpDeskController::class
], function () {
    Route::get('/helpdesk', 'list')->name('list');
    Route::get('/helpdesk/{ticket:id}', 'show')->name('show');
});
