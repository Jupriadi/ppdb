<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfsekModels;

class Panel extends BaseController
{
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
	}
	public function index()
	{
		$data = [
			'judul' => "Admin",
			'judulhalaman' => 'Dashboard'
		];
		return view('pages/admin/index',$data);
	}
	public function profsek($id = false)
	{

		$data = [
			'judul' => "Profil Sekolah",
			'judulhalaman' => 'Profil Sekolah',
			'profil' => $this->profsek->first(),
            'validation' => \Config\Services::validation(),
		];
		if($id == false)
		{

			return view('pages/admin/profsek/index',$data);
		}else{
			return view('pages/admin/profsek/editprofsek',$data);

		}
	}

	public function guru()
	{
		$data = [
			'judul' => "Guru",
			'judulhalaman' => 'Guru'
		];
		return view('pages/admin/guru/index',$data);
	}
}
