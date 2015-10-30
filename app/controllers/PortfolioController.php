<?php

class PortfolioController extends BaseController {

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

	public function index()
	{
		return View::make('portfolio.index');
	}

	public function oakridge()
	{
		return View::make('portfolio.oakridge');
	}

	public function kampai()
	{
		return View::make('portfolio.kampai');
	}

	public function saifipearl()
	{
		return View::make('portfolio.saifipearl');
	}

	public function palladium()
	{
		return View::make('portfolio.palladium');
	}

	public function pavillions()
	{
		return View::make('portfolio.pavillions');
	}

	public function capitalgardens()
	{
		return View::make('portfolio.capital-gardens');
	}

	public function atrium()
	{
		return View::make('portfolio.atrium');
	}

	public function monot()
	{
		return View::make('portfolio.monot');
	}

	public function parktower()
	{
		return View::make('portfolio.park-tower');
	}

	public function saifisuites()
	{
		return View::make('portfolio.saifisuites');
	}

}
