<?php

namespace App\Models;

use CodeIgniter\Model;

class M_stel_136 extends Model
{
    protected $table = 'stel_136';
    // protected $primaryKey = 'id_user';
    protected $allowedFields = ['no', 'item_uji', 'spesifikasi'];

    public function getStel()
	{
        // $db      = \Config\Database::connect();
        // $builder = $db->table('user');
        $model = new M_stel_136();
        $query   = $model->findAll();
		return $query;
	}

}