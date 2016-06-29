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

// Route::get('/', function () {
//     return view('home');
// });

$router->bind('item', function($id)
{
    return App\Item::whereId($id)->first();
});

Route::get('/', 'PagesController@index');

// Route of items
Route::get('item', 'ItemController@get');
Route::get('item/create', 'ItemController@create');
Route::post('item', 'ItemController@post');
Route::get('item/edit/{id}', 'ItemController@edit');

//Route of supplier
Route::get('supplier', 'SupplierController@get');
Route::get('supplier/create', 'SupplierController@create');
Route::post('supplier', 'SupplierController@post');
//edit supplier


//Route of stockUpdate
Route::get('stock_update', 'StockupdateController@get');


// //updating the
// Route::patch('notes/{notes}', 'NotesController@update');