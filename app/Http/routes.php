<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){

    Route::resource('setting', 'SettingController');
    Route::resource('bookmarks', 'BookmarksController');
    Route::resource('folder', 'FolderController');

});
