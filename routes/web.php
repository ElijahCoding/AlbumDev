<?php

/**
* Authentication
*/
Route::get('/login', 'Auth\\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\\LoginController@login');

Route::group(['middleware' => 'auth', 'namespace' => 'Album', 'prefix' => 'albums'], function () {
    Route::get('/', 'AlbumController@index');
});
Route::get('/', 'HomeController@index')->name('home');
