<?php

namespace App\Models;

use CodeIgniter\Model;

class M_stel_135 extends Model
{
    protected $table = 'stel_135';
    protected $allowedFields = ['no', 'item_uji', 'spesifikasi'];

    public function getStel()
	{
        $model = new M_stel_135();
        $query   = $model->findAll();
		return $query;
	}

}