<?php

use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function (){
    Route::match(['GET', 'POST'], 'auth/login', 'Rs');
});
