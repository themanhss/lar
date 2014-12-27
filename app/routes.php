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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello',function(){
    return View::make('helloworld');
});

Route::get('abc/{id}',function($id){
    return "Hello world, my ID is $id ";
});

Route::get("demo","DemoController@index");
Route::get("demo/content/{id}",array("as"=>"content","uses"=>"DemoController@getContent"));