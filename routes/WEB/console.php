<?php

use App\Http\Controllers\Console\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Console\DashboardController;

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

Route::group(['as' => "console."], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/', [LoginController::class, 'index'])->name('index');

    });




});


Route::fallback(function () {return redirect()->route('console.public.index');});
