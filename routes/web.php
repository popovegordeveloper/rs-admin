<?php

use \Illuminate\Support\Facades\Route;

Route::namespace('Rs\RsAdmin\Controllers')->prefix('admin')->middleware('web')->group(function (){

    /*Апи методы*/
    Route::prefix('api')->group(function () {
        Route::post('auth/login', 'AuthController@login');

        Route::middleware(\Rs\RsAdmin\Middleware\Authenticate::class)->group(function () {
            Route::post('auth/logout', 'AuthController@logout');
        });
    });
    /***********/

    Route::get('auth/login', 'AuthController@loginPage')->name('admin.login');
    Route::middleware(\Rs\RsAdmin\Middleware\Authenticate::class)->group(function (){
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    });
});
