<?php
//
// Route::get('/libraries', 'Programming\Api\CdnController@index');
//

Route::group(['namespace' => 'Api'], function () {
    /*
    / Auth
    */
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('/register', 'AuthController@register');

        Route::post('/login', 'AuthController@login');

        Route::post('/logout', 'AuthController@logout');
    });
});
