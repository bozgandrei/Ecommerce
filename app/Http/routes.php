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
    /*Route::get('/ciclism', function (){
        return view('ciclism.first');
    });*/


    //Ruta afisare produs la partea de fotabl si ciclism
    Route::get('/ciclism', 'ProduseController@showProdusCiclism');
    Route::get('/football', 'ProduseController@showProdusFotbal');

    //Ruta afisare mesaj adaugare cu succes produs/categorie
    Route::get('/add_message_prod', function (){
        return view('entities.add.addmessage_prod');
    });
    Route::get('/add_message_cat', function (){
        return view('entities.add.addmessage_cat');
    });

    //Ruta Login si Register
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

    //Route::get('/edit{id}', 'ProduseController@editProdus');

    //Ruta adaugare categorie si produs cu tot cu upload poza
    Route::post('/addprodus','ProduseController@newProdus');
    Route::get('/addprodus', 'ProduseController@add');
    Route::post('/upload', 'ProduseController@upload');

    Route::get('/addcategori', function (){
        return view('entities.add.addcategori');
    });

    Route::post('/addcategori','CategorieController@newCategorie');

    //Route::get('/detaliiProdus', 'ProduseController@detaliiProdus');

    //Test Modal
    Route::get('detalii', function() {
        return view('ciclism.modalDetaliiProdus');
    });

});


