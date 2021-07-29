<?php

namespace App\Models;

use CodeIgniter\Model;

class M_stel_135 extends Model
{
    protected $table = 'stel_135';
    protected $primaryKey = 'no';
    protected $allowedFields = ['item_uji', 'spesifikasi'];

    public function getStel()
	{
        // $db      = \Config\Database::connect();
        // $builder = $db->table('user');
        $model = new M_stel_135();
        $query   = $model->findAll();
		return $query;
	}

}