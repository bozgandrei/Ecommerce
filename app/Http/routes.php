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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('layout.home');
    });
    Route::get('/football', function (){
       return view('football.first');
    });
    Route::get('/cyclism', function (){
        return view('cyclism.first');
    });
    Route::get('/login', function (){
        return view('auth.login');
    });
    Route::get('/register', function (){
        return view('auth.register');
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
