<?php

Route::get('/', function () {
    return redirect()->route('info.index');
});

/**
* Authentication
*/
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Album', 'prefix' => 'albums'], function () {
    Route::get('/', 'AlbumController@index')->name('albums.index');
    Route::get('/create', 'AlbumController@create')->name('albums.create');
    Route::post('/store', 'AlbumController@store')->name('albums.store');
});

/**
* Authentication
*/
Route::group(['prefix' => 'info', 'namespace' => 'Info', 'middleware' => 'auth'], function () {
    Route::get('/', 'InfoController@index')->name('info.index');
    Route::get('/hacker-news', 'HackerNewsController@index');
});
