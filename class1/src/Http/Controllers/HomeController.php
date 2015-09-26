<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
	public function index(Request $request)
	{
		var_dump($request); 

		return 'hello at'.
		$request->getBasePath().
		'from controller';
	}	
}