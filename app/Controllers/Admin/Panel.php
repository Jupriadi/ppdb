<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfsekModels;
use App\Models\GuruModels;
use App\Models\SiswaModels;

class Panel extends BaseController
{
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
		$this->guru = new GuruModels;
		$this->siswa = new SiswaModels;
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
			'judulhalaman' => 'Guru',
			'dataguru' => $this->guru->findAll(),
		];
		return view('pages/admin/guru/index',$data);
	}
	public function formguru($id=false)
	{
		$data = [
			'judul' => "Guru",
			'judulhalaman' => 'Form Guru',
            'validation' => \Config\Services::validation(),
		];
		if(!$id==false):
			$data['guru'] = $this->guru->find($id);
			$data['edit'] = 1;
		else:
			$data['edit'] = 0;
			$data['guru'] = "";
		endif;
		// dd($data);
		return view('pages/admin/guru/formguru',$data);
	}
	public function siswa()
	{
		$data = [
			'judul' => "SISWA",
			'judulhalaman' => 'Data Siswa',
			'datasiswa' => $this->siswa->findAll(),
		];

		return view('pages/admin/siswa/index',$data);
	}
	public function formsiswa($id=false)
	{
		$data = [
			'judul' => "Form Siswa",
			'judulhalaman' => 'Form Siswa',
		];

		if(!($id == false))
		{
			$data['edit'] = 1;
			$data['siswa'] = $this->siswa->find($id);
		}else{
			$data['edit'] = 0;

		}
		return view('pages/admin/siswa/formsiswa',$data);
	}
}
