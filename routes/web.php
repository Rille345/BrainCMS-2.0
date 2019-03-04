<?php

Route::group([ "middleware" => "guest" ], function () {
    Route::get('/', 'IndexController@show')->name('index');
    Auth::routes();
});


Route::group([ "middleware" => "user" ], function () {

    Route::group([ "namespace" => "Home" ], function () {
        Route::get('me', 'Me@render')->name('me');
        Route::get('client', 'Client@render')->name('client');
        Route::get('logout', 'Logout@render')->name('logout');
    });
});


