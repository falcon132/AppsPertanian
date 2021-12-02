<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\user_model;

class Akun extends BaseController
{
	public function index()
	{
		$data = [
			'title'			=> 'Update Profile: ',
			'content'		=> 'admin/akun/index'
		];
		echo view('admin/layout/wrapper', $data);
	}
}
