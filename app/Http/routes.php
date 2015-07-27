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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', 'AdminController@index');


// Admin Routes
// ===================

Route::group(['prefix' => 'admin'], function () {
        /*Main route for admin = direct to illustrations page*/
        Route::get('/', 'AdminController@illustrations');
        /*Route to dashboard*/
        /*Route::get('dashboard', 'AdminController@dashboard');*/
        /*Route to illustrations page */
        Route::get("illustrations",             ['as' => 'illustrations',           'uses' => 'AdminController@illustrations']);
        /*Routes get/post for creating an illustration*/
        Route::get('illustrations/create',      ['as' => 'illustrations.create',    'uses' => 'AdminController@createIllustration']);
        Route::post('illustrations/create',     ['as' => 'illustrations.create',    'uses' => 'AdminController@storeIllustration']);
        /*Routes for editing illustration*/
        Route::get('illustrations/edit/{id}',   ['as' => 'illustrations.edit',      'uses' => 'AdminController@editIllustration']);
        Route::post('illustrations/edit/{id}',  ['as' => 'illustrations.edit',      'uses' => 'AdminController@updateIllustration']);
        /*Routes for removing picture */
        Route::get('illustrations/remove/{id}', ['as' => 'illustrations.remove',    'uses' => 'AdminController@removeIllustration']);

        Route::get('analytics', "AdminController@analytics");

        /* Routes for TagsController */
        Route::get('illustrations/tags-list', ['as' => 'illustrations.tags-list', 'uses' => 'TagsController@tagsList']);
    }

);

// Auth Routes
// ===================
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// API Routes
// ===================
Route::group(array('prefix' => 'API'), function () {

        Route::get('/', 'APIController@recommendations');

        Route::get('recommendations', 'APIController@recommendations');

        Route::get('illustrations', 'APIController@illustrations');

    }
);
