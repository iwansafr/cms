<?php

namespace App\Controllers;

use \App\Models\User;
use \App\Models\Config;
use \App\Models\Role;

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

	public function install()
	{
		helper('system');
		$post = $this->request->getPost();
		if(!empty($post))
		{
			$role = new Role();
			$role_data = ['title'=>'root','description'=>'super user account','level'=>'1'];
			if($role->save($role_data)){
				$role = $role->where('title','root')->first();
				if(!empty($role))
				{
					$user = new User();
					if($user->save([
						'username' => $post['username'],
						'email' => $post['email'],
						'password' => encrypt($post['password']),
						'role_id' => $role['id']
					])){
						$config = new Config();
						if($config->save([
							'title' => 'site',
							'param' => json_encode(['template'=>$post['template']])
						])){
							return redirect()->to('admin');
						}else{
							echo 'config failed create';
						}
					}else{
						echo 'user failed create';
					}
				}
			}else{
				echo 'table Role not exist';
			}
		}
	}

}