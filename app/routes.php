<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*Route::get('/', function()
{
	return View::make('hello');
});*/
Route::get('/', 'ItemController@showList');
Route::get('show_items', 'ItemController@showItems');

Route::post('add_item', 'ItemController@addItem');
Route::post('update_item', 'ItemController@updateItem');
Route::post('delete_item', 'ItemController@deleteItem');



View::composer('lists.show_items', function($view)
{
    $items = Item::all();
    $view->with('items', $items);
});

