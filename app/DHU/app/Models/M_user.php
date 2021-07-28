<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email', 'password', 'paraf'];

    public function check_login($email, $password)
	{
        // $email = set_value('email');
		// $password = set_value('password');
        $db      = \Config\Database::connect();
        $array = ['email' => $email, 'password' => $password];
        $builder = $db->table('user');

		$result = $builder->where($array);

		if ($result->countAllResults() > 0){
			// return $result->get()->getResult();
            return TRUE;
            // $result = $query->getResult(); // Result as objects eg; $result->kode
            // $kode = $result->kode;
		}else{
			return FALSE;
		}
	}

    public function getUser()
	{
        // $db      = \Config\Database::connect();
        // $builder = $db->table('user');
        $model = new M_user();
        $query   = $model->findAll();
		return $query;
	}

}