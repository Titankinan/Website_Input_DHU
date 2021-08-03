<?php

namespace App\Models;

use CodeIgniter\Model;

class M_aktivitas extends Model
{
    protected $table = 'aktivitas';
    protected $primaryKey = 'id_aktivitas';
    protected $allowedFields = ['id_laporan', 'id_user', 'tanggal', 'activity', 'kondisi_awal'];

    // public function getLaporan()
	// {
    //     $model = new M_laporan();
    //     $query   = $model->findAll();
	// 	return $query;
	// }

    public function getById($id)
    {
        $model = new M_aktivitas();
        $query = $model->where('id_laporan', $id)->findAll();
		return $query;
    }
}