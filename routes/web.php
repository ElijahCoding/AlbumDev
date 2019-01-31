<?php
/**
* Authentication
*/
Route::get('/login', 'Auth\\LoginController@showLoginForm')->name('login');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
