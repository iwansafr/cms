<?php

namespace App\Controllers;

use \App\Models\Blt;

class HomeController extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	//--------------------------------------------------------------------

}