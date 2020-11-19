<?php

namespace App\Controllers;

use App\Models\Image;
class ImageController extends BaseController
{
	public function index()
	{
		return view('admin/image/index');
	}
	public function index_preview()
	{
		return view('admin/image/index_preview');
	}
	public function data()
	{
		$image = new Image();
		$data = $image->find();
		if(!empty($data))
		{
			echo json_encode(['status'=>true,'data'=>$data]);
		}
	}
	public function create()
	{
		if(!empty($this->request->getFile('image')))
		{
			$data = [
				'title' => $this->request->getPost('title'),
			];
	    $file = $this->request->getFile('image');
	    if (!empty($file->getClientExtension())) {
	      $image = md5(time()).'.' . $file->getClientExtension();
	      if ($file->move('images/upload/', $image)) {
	        $data['image'] = $image;
	        \Config\Services::image()
	          ->withFile('images/upload/' . $image)
	          ->resize(200, 100, true, 'height')
	          ->save('images/upload/thumb_' . $image);
	        \Config\Services::image()
	          ->withFile('images/upload/' . $image)
	          ->resize(300, 300, true, 'height')
	          ->save('images/upload/' . $image);
		      $imageModel = new Image();
		      if($imageModel->save($data)){
		      	echo json_encode(['status'=>true,'data'=>$data]);
		      }else{
		      	echo json_encode(['status'=>false,'msg'=>'image failed upload']);
		      }
	      }
	    }
		}
	}
}

