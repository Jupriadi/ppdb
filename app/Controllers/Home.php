<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'SDIT Said Alamin',
		];
		return view('/pages/user/index');
	}
}
