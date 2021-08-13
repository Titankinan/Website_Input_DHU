<?php

namespace App\Models;

use CodeIgniter\Model;

class M_stel_137 extends Model
{
    protected $table = 'stel_137';
    // protected $primaryKey = 'no';
    protected $allowedFields = ['no', 'item_uji', 'spesifikasi'];

    public function getStel()
	{
        // $db      = \Config\Database::connect();
        // $builder = $db->table('user');
        $model = new M_stel_137();
        $query   = $model->findAll();
		return $query;
	}

}