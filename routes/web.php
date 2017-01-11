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

Route::get('administration/quakers', 'HomeController@quakers');
Route::get('administration/social-concern', 'HomeController@social');
Route::get('administration/sunday-school', 'HomeController@sunday');
Route::get('administration/usfw', 'HomeController@usfw');
Route::get('administration/yfp', 'HomeController@yfp');
Route::get('administration/ushers', 'HomeController@ushers');

Route::get('services', 'CmsController@serviceindex');

Route::get('events', 'CmsController@events');
Route::get('events/{id}/{title}', 'CmsController@fullevent');


//admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('add-service', array('as' => 'add-service', 'uses' => 'CmsController@index'));
    Route::get('add-event', array('as' => 'add-event', 'uses' => 'CmsController@addevent'));

    Route::any('addingservice', 'CmsController@addingservice');
    Route::any('addingevent', 'CmsController@addingevent');
});