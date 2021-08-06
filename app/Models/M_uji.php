<?php

namespace App\Models;

use CodeIgniter\Model;

class M_uji extends Model
{
    protected $table = 'uji';
    protected $primaryKey = 'id_uji';
    protected $allowedFields = ['id_laporan', 'id_user', 'no', 'tanggal', 'hasil_uji'];

    public function getById($id)
    {
        $model = new M_uji();
        $query = $model->where('id_laporan', $id)->findAll();
		return $query;
    }
}