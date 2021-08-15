<?php

namespace App\Models;

use CodeIgniter\Model;

class M_gambar extends Model
{
    protected $table = 'gambar';
    protected $primaryKey = 'id_gambar';
    protected $allowedFields = ['id_laporan', 'no', 'keterangan', 'gambar'];

    public function getById($id)
    {
        $model = new M_gambar();
        $query = $model->where('id_laporan', $id)->findAll();
		return $query;
    }
}