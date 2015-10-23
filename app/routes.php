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

Route::resource('welcome','WelcomeController');
Route::controller('/controller','WelcomeController',['getFirst' => 'first', 'getSecond' => 'Second', 'postThird' => 'third']);
Route::filter('filter.demo',function(){
	$now = \Carbon\Carbon::now();
	if (($now->hour > 1) && ($now->hour < 11))
		return 'now allow to see';
});
Route::get('/filter-before',['before'=>'filter.demo','uses'=>'HomeController@allowed']);
Route::get('/filter-after',['after'=>'filter.demo','uses'=>'HomeController@allowed']);
Route::controller('/news','NewsController');
Route::controller('/views','HomeController');

//Pass Params to View
Route::get('/data', function() {
	return View::make('passdata', ['email' => 'a@fda.com', 'username' => 'This is UserName']);
});

Route::controller('/view','HomeController');