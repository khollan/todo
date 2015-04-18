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
Route::get('open_form', 'ItemController@openForm');

Route::post('add_item', 'ItemController@addItem');

View::composer('lists.show_items', function($view)
{
    $items = Item::all();
    $view->with('items', $items);
});

