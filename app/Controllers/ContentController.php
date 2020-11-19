<?php

namespace App\Controllers;

use App\Models\Content;
class ContentController extends BaseController
{
	public function index()
	{
		return view('admin/image/index');
	}
	public function data()
	{
		$image = new Content();
		$data = $image->find();
		if(!empty($data))
		{
			echo json_encode(['status'=>true,'data'=>$data]);
		}
	}
	public function new()
	{
		return view('admin/content/edit');
	}
}

