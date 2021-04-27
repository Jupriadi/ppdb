<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModels extends Model
{
	protected $table                = 'siswa';
	protected $primaryKey           = 'idSiswa';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
			'nis',
			'namasiswa',
			'kelamin',
			'alamat',
			'tmptlahir',
			'tgllahir',
			'kelas',
			'sekolahasal',
			'status',
			'photo',
		];

	// Dates
	protected $useTimestamps        = True;
	protected $dateFormat           = 'date';
	protected $createdField         = 'tgldaftarsiswa';
	protected $updatedField         = 'tglubahsiswa';
}
