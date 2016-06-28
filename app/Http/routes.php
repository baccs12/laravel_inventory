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

Route::get('/', 'PagesController@index');

Route::get('item.blade.php', 'PagesController@view');

Route::get('supplier.blade.php', 'PagesController@supply');

Route::get('update.blade.php', 'PagesController@update');

Route::get('users.blade.php', 'PagesController@account');