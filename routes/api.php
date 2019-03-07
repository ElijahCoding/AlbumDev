<?php

Route::group(['namespace' => 'Api'], function () {
    /*
    // Auth
    */
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('/register', 'AuthController@register');

        Route::post('/login', 'AuthController@login');

        Route::post('/logout', 'AuthController@logout');
    });

    Route::group(['middleware' => 'jwt.verify'], function () {
        /*
        // Albums
        */
        Route::group(['prefix' => 'album', 'namespace' => 'Album'], function () {
            Route::get('/', 'AlbumController@index');
            Route::get('/{album}', 'AlbumController@show');
            Route::post('/store', 'AlbumController@store');

            Route::group(['prefix' => '{album}', 'namespace' => 'Picture'], function () {
                Route::get('/picture', 'PictureController@index');
                Route::post('/picture/store', 'PictureController@store');
            });
        });
    });

});
