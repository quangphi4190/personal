<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix'=>'v1', 'namespace' => 'Api'],function(){

	Route::group(['prefix' => 'auth'], function () {
		Route::post('login', 'AuthController@login');
		Route::post('signup', 'AuthController@signup');
		Route::put('verify', 'AuthController@verify');
		Route::put('forgot', 'AuthController@forgot');
		Route::post('check', 'AuthController@isUseOmikey');

		Route::group(['middleware' => ['auth:api', 'checkDevice']], function() {
			Route::delete('logout', 'AuthController@logout');
			Route::get('me', 'AuthController@user');
			Route::put('update', 'AuthController@update');
			Route::post('avatar', 'AuthController@avatar');
		});
	});




});
