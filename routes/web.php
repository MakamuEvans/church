<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('administration/quakers', function () {
    return view('admin.quaker');
});

Route::get('services', 'CmsController@serviceindex');


//admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('add-service', array('as' => 'add-service', 'uses' => 'CmsController@index'));

    Route::any('addingservice', 'CmsController@addingservice');
});