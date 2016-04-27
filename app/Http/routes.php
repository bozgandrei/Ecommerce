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
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Support\Facades\Input;
Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('layout.home');
    });
    Route::get('/football', function () {
        return view('football.first');
    });
    /*Route::get('/ciclism', function (){
        return view('ciclism.first');
    });*/


    //Ruta afisare produs la partea de fotabl si ciclism
    Route::get('/ciclism', 'ProduseController@showProdusCiclism');
    Route::get('/football', 'ProduseController@showProdusFotbal');

    //Ruta afisare mesaj adaugare cu succes produs/categorie
    Route::get('/add_message_prod', function () {
        return view('entities.add.addmessage_prod');
    })->middleware('admin');
    Route::get('/add_message_cat', function () {
        return view('entities.add.addmessage_cat');
    })->middleware('admin');

    //Ruta Login si Register
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/addprodus', function () {
        return view('entities.add.addprodus');
    })->middleware('admin');

    //Route::get('/edit{id}', 'ProduseController@editProdus');

    //Ruta adaugare categorie si produs cu tot cu upload poza
    Route::post('/addprodus', 'ProduseController@newProdus')->middleware('admin');
    Route::get('/addprodus', 'ProduseController@add')->middleware('admin');
    Route::post('/upload', 'ProduseController@upload')->middleware('admin');

    Route::get('/addcategori', function () {
        return view('entities.add.addcategori');
    })->middleware('admin');

    Route::post('/addcategori', 'CategorieController@newCategorie')->middleware('admin');

    //modal detalii produs
    Route::get('/detaliiprodus/{id}', 'ProduseController@getDetaliiProdus');
    Route::post('/detaliiprodus', 'ProduseController@postDetaliiProdus');

    //Test Modal
    Route::get('deleteproduct/{id}', 'ProduseController@deleteProdus')->middleware('admin');

    Route::get('/editprodus/{id}', 'ProduseController@getEditProdus')->middleware('admin');
    Route::post('/editprodus', 'ProduseController@postEditProdus')->middleware('admin');
    Route::get('/cart', 'ProduseController@getCart');
    Route::get('/pdf', 'PDFController@generatePDF')->middleware('user');
    Route::get('addcart/{id}', 'ProduseController@addcart');
    Route::get('deleteitem/{id}', 'ProduseController@deleteitem');
    Route::get('/contact', 'PDFController@getContact');
    Route::get('home/searchredirect', function () {
        if (empty(Input::get('search'))) return redirect()->back();
        $search = urlencode(e(Input::get('search')));
        $route = "home/search/$search";
        return redirect($route);
    });
    Route::get("home/search/{search}", "ProduseController@search");
    Route::get('/send','PDFController@generatePDF')->middleware('user');

});


