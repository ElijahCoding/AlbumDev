<?php

// Route::get('/{any?}', function () {
//  return view('index');
// })->where('any', '[\/\w\.-]*');
//

/**
* Authentication
*/
// Route::group(['namespace' => 'Auth'], function () {
//     Route::get('/login', 'LoginController@showLoginForm')->name('login');
//     Route::post('/login', 'LoginController@login');
//     Route::post('/logout', 'LoginController@logout')->name('logout');
// });
//
// Route::group(['middleware' => 'auth', 'namespace' => 'Album', 'prefix' => 'albums'], function () {
//     Route::get('/', 'AlbumController@index')->name('albums.index');
//     Route::post('/store', 'AlbumController@store')->name('albums.store');
//     Route::delete('/{album}/destroy', 'AlbumController@destroy')->name('albums.delete');
//
//     /**
//     * Pictures
//     */
//     Route::group(['namespace' => 'Picture'], function () {
//         Route::post('/{album}/pictures/store', 'PictureController@store');
//     });
// });
//
// /**
// * Info
// */
// Route::group(['prefix' => 'info', 'namespace' => 'Info', 'middleware' => 'auth'], function () {
//     Route::get('/hacker-news', 'HackerNewsController@index')->name('hackernews.index');
//
//     Route::get('/reddit', 'RedditController@index')->name('reddit.index');
//
// });
//
// /**
// * Programming
// */
// Route::group(['prefix' => 'programming', 'namespace' => 'Programming', 'middleware' => 'auth'], function () {
//     Route::get('/cdn', 'CdnController@index')->name('cdn.index');
//     Route::get('/cdn/libraries/{library}', 'CdnController@show');
//
//     Route::get('/github/repositories', 'GithubController@index')->name('github.index');
// });
//
// Route::get('/test/github', 'Github\GithubController@index');
