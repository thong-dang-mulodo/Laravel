<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function allowed()
	{
		return 'be allowed view';
	}

	public function filer()
	{
		$now = \Carbon\Carbon::now();
		if (($now->hour > 1) && ($now->hour < 11))
			return 'the time:'.$now->toDateTimeString().'not allowd';
		else
			return 'the time:'.$now->toDateTimeString().'is allowd';
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getReturn()
	{
		return View::make('return');
	}

	public function getVariable()
	{
		$var = View::make('return');
		return $var;
	}

	public function getView()
	{
		return View::make('post')->with('username','Buzz')->with('email','thong@.com')->with('value',1);
	}


}
