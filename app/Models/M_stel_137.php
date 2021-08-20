<?php

namespace App\Models;

use CodeIgniter\Model;

class M_stel_137 extends Model
{
    protected $table = 'stel_137';
    protected $allowedFields = ['no', 'item_uji', 'spesifikasi'];

    public function getStel()
	{
        $model = new M_stel_137();
        $query   = $model->findAll();
		return $query;
	}

}