<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfsekModels;

class Progres extends BaseController
{
	public function __construct()
	{
		$this->profsek = new ProfsekModels;
	}
	
    public function ubahprofil()
    {
        $id=$this->request->getVar('id');
        $logo = $this->request->getFile('logo');
        $find = $this->profsek->find($id);
        // dd($find);
        if($logo == ""):
            $loganame = $find['logo'];
        else:
            if(!$find['logo'] == 'sekolah.png'):
                unlink('assets/img/'.$find['logo']);
                $logoname = $logo->getRandomName();
            else:
                
            endif;

            $logo->move('assets/img/', $logoname);
        endif;
        dd($logoname);
        $data = [
            'id' => $id,
            'namasekolah' => htmlspecialchars($this->request->getVar('namasekolah')),
            'npsn' => htmlspecialchars($this->request->getVar('npsn')),
            'nis' => htmlspecialchars($this->request->getVar('nis')),
            'nss' => htmlspecialchars($this->request->getVar('nss')),
            'hp' => htmlspecialchars($this->request->getVar('hp')),
            'email' => htmlspecialchars($this->request->getVar('email')),
            'website' => htmlspecialchars($this->request->getVar('website')),
            'provinsi' => htmlspecialchars($this->request->getVar('provinsi')),
            'kabupaten' => htmlspecialchars($this->request->getVar('kabupaten')),
            'kecamatan' => htmlspecialchars($this->request->getVar('kecamatan')),
            'desa' => htmlspecialchars($this->request->getVar('desa')),
            'logo' => $logoname,
        ];

        $simpan = $this->profsek->save($data);
        if($simpan)
        {
            session()->setFlashdata('saved','Data Berhasil Disimpan..!');
            return redirect()->to('/panel/profsek/');
        }
    }

}
