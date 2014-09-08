<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', ['as' => 'users', 'uses' => 'HomeController@users']);

Route::get('users/{id}', ['as' => 'userInfo', 'uses' => 'HomeController@userInfo'])->where(['id' => '[0-9]+']);

Route::get('users/add',['as' => 'userForm', 'uses' => 'HomeController@userForm'])->where(['add' => '[a-z]+']);
Route::post('users/add',['as' => 'userAdd', 'uses' => 'HomeController@userAdd'])->where(['add' => '[a-z]+']);

Route::get('users/{id}/edit',['as' => 'userEdit', 'uses' => 'HomeController@userEdit'])->where(['id' => '[0-9]+']);
Route::post('users/{id}/edit',['as' => 'userEditSave', 'uses' => 'HomeController@userEditSave'])->where(['id' => '[0-9]+']);

Route::get('users/{id}/delete',['as' => 'userDelete', 'uses' => 'HomeController@userDelete'])->where(['id' => '[0-9]+']);

Route::post('ajax/search', ['as' => 'search', 'uses' => 'AjaxController@search']);