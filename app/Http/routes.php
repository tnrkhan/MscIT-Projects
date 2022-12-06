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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::resource('tasks', 'TasksController');


// Part 1 : https://www.sitepoint.com/bootstrapping-laravel-crud-project/
// Part 2 : https://www.sitepoint.com/crud-create-read-update-delete-laravel-app/