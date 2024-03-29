<?php

namespace App\Models;

use CodeIgniter\Model;

class M_laporan extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $allowedFields = ['id_stel', 'spk', 'perangkat', 'merk', 'tipe', 'noseri', 'aksi', 'penguji1', 'penguji2'];

    public function getLaporan()
	{
        $model = new M_laporan();
        $query   = $model->findAll();
		return $query;
	}

    public function getById($id)
    {
        $model = new M_laporan();
        $query = $model->where('id_laporan', $id)->findAll();
		return $query[0];
    }

    public function getByPenguji($id)
    {
        $model = new M_laporan();
        $model->where('penguji1', $id);
        $model->orWhere('penguji2', $id);
        $query = $model->orWhere('penguji2', $id)->findAll();
		return $query;
    }
}