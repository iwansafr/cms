<?php

namespace App\Controllers;

use \App\Models\Blt;

class InstallationController extends BaseController
{
	public function index()
	{
		$templates = [];
		foreach(glob('templates/*') AS $key){
			$templates[] = str_replace('templates/','',$key);
		}
		return view('installation/index',['templates'=>$templates]);
	}

	//--------------------------------------------------------------------

}