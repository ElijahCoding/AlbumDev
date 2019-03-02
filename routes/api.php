<?php

Route::group(['namespace' => 'Api'], function () {
    /*
    / Auth
    */
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('/register', 'AuthController@register');

        Route::post('/login', 'AuthController@login');

        Route::post('/logout', 'AuthController@logout');
    });

    Route::group(['middleware' => 'jwt.verify'], function () {
        Route::group(['prefix' => 'libraries'], function () {
            Route::get('/', 'Libraries\LibrariesController@index');
        });
    });

});
