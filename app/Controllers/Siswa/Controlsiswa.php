<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;

class Controlsiswa extends BaseController
{
	public function simpan($id = false)
    {
        // dd($this->request->getVar());
        // if($this->request->getVar('daftar')=="user"){
        //     dd('user');
        // }else{
        //     dd('admin');
        // }

        $data=[];
        $posts = $this->request->getPost();
        $photo = $this->request->getFile('photo');
        // dd($photo);
        foreach($posts as $post => $value):
            if($post == 'daftar')continue;
            $data[$post] = htmlspecialchars($value);
        endforeach;
        // dd($data);

        if(!($id == false)):
            $data['idSiswa'] = $id;
            $find = $this->siswa->find($id);
            if($photo == ""):
                $data['photo'] = $find['photo'];
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                if(!($find['photo']=='siswa.png')):
                    unlink('assets/photosiswa/'.$find['photo']);
                endif;
                $photo->move('assets/photosiswa/',$namaphoto);
            endif;

        else:
            if($photo == ""):
                $data['photo'] = 'siswa.png';
            else:
                $namaphoto = $photo->getRandomName();
                $data['photo'] = $namaphoto;
                $photo->move('assets/photosiswa/',$namaphoto);
            endif;

        endif;

        $simpan = $this->siswa->save($data);

        if ($simpan):
            if(($this->request->getVar('daftar')=='user'))
            {
                
                session()->setFlashdata('saved','Proses Daftar Berhasil..!');
                return redirect()->to('/');
            }
            session()->setFlashdata('saved','Siswa Berhasil Ditambah..!');
            return redirect()->to('/siswa');
        endif;
    }
    public function hapus($id)
    {
        $find = $this->siswa->find($id);
        // dd($find);
        if(!($find['photo'] == 'siswa.png')){
            unlink('assets/photosiswa/'.$find['photo']);
        }

        $this->siswa->delete($id);
        session()->setFlashdata('saved','Data Berhasil Dihapus..!');
        return redirect()->to('/siswa');
    }
}
