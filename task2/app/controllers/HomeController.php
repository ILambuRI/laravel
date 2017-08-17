<?php

class HomeController extends BaseController {

	public function showHome()
	{
		return View::make('task1.home');
	}

	public function showContact()
	{
		return View::make('task1.contact', array ('error' => false));
	}

	public function showThank($name = 'guest')
	{
		$name = Input::old('name');
		
		return View::make('task1.thank_contact', array ('name' => $name));
	}

	public function postContact()
	{
		Input::flashOnly('name');
		$name = Input::get('name');
		$msg = Input::get('msg');

		if ($name && $msg)
		{
			// return Redirect::to('thank/' . $name);
			return Redirect::to('thank')->withInput();
		}
		else
		{
			return View::make('task1.contact', array ('error' => true));
		}

	}
	
	public function showAbout()
	{
		return View::make('task1.about');
	}
	
	public function showArticles()
	{
		return View::make('task1.articles', array ('articles' => array (1,2,3,4,5,6,7,8,9,10)));
	}
	
	public function showArticle($num = 1)
	{
		return View::make('task1.article', array ('num' => $num));
	}
}
