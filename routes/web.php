<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::namespace('\App\Http\Controllers\Site')->group(function(){ 
    
    
    Route::get('/', 'HomeController')->name('site.index');

    Route::get('/requests', 'RequestsController@index')->name('site.requests');

    // produtos

    Route::get('/products', 'ProductsController@show')->name('site.products');
    Route::get('/createproducts', 'ProductsController@view')->name('site.createproduct'); 
    Route::get('/showproducts', 'ProductsController@show')->name('site.showproduct');
    Route::get('/delproducts/{id}', 'ProductsController@destroy')->name('site.delproduct');
    Route::get('/editproduct/{id}', 'ProductsController@edit')->name('site.editproduct');

    Route::post('/newcreateproducts', 'ProductsController@create')->name('site.create');
    Route::post('/updateproduct/{id}', 'ProductsController@update')->name('site.updateproduct');

    // clientes

    Route::get('/clients', 'ClientsController@show')->name('site.clients');
    Route::get('/createclients', 'ClientsController@view')->name('site.createclient'); 
    Route::get('/showclients', 'ClientsController@show')->name('site.showclient');
    Route::get('/delclients/{id}', 'ClientsController@destroy')->name('site.delclient');
    Route::get('/editclients/{id}', 'ClientsController@edit')->name('site.editclient');

    Route::post('/newcreateclients', 'ClientsController@create')->name('site.newcreateclient');
    Route::post('/updateclients/{id}', 'ClientsController@update')->name('site.updateclient');
});
