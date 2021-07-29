<?php

namespace App\Models;

use CodeIgniter\Model;

class M_laporan extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $allowedFields = ['id_stel', 'spk', 'perangkat', 'merk', 'tipe', 'noseri'];

    public function getLaporan()
	{
        $model = new M_laporan();
        $query   = $model->findAll();
		return $query;
	}
}