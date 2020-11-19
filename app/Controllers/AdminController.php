<?php

namespace App\Controllers;

use \App\Models\Blt;

class AdminController extends BaseController
{
	public function index()
	{
		return view('admin/index');
	}

	//--------------------------------------------------------------------

}