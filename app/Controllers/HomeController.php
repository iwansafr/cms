<?php

namespace App\Controllers;

use \App\Models\Blt;

class HomeController extends BaseController
{
	public function index()
	{
		$blt = new Blt();
		$db = \Config\Database::connect();
		$user = $db->table('users')->get();
		$data_blt = [];
		$data_blt['desa'] = $blt->where('valid_count', 6)->find();
		$data_blt['kecamatan'] = $blt->where('valid_count', 5)->find();
		$data_blt['dinsos'] = $blt->where('valid_count', 4)->find();
		$data_blt['provinsi'] = $blt->where('valid_count', 3)->find();
		$data_blt['kementerian'] = $blt->where('valid_count', 2)->find();
		return view('home/index', ['data_blt' => $data_blt]);
	}

	//--------------------------------------------------------------------

}