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
    Route::get('/ciclism', function (){
        return view('ciclism.first');
    });

    Route::get('/add_message', function (){
        return view('entities.add.addmessage');
    });

    Route::get('/login', function (){
        return view('auth.login');
    });
    Route::get('/register', function (){
        return view('auth.register');
    });
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/addprodus', function (){
        return view('entities.add.addprodus');
    });
    Route::post('/addprodus','ProduseController@newProdus');
    Route::get('/addprodus', 'ProduseController@add');
});


