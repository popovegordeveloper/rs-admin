<?php

use \Illuminate\Support\Facades\Route;

Route::namespace('Rs\RsAdmin\Controllers')->prefix('admin')->group(function (){

    Route::match(['GET', 'POST'], 'auth/login', 'AuthController@login')->name('admin.login');

});
