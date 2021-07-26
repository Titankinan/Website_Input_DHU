<?php

namespace App\Controllers;

class tambahdhu extends BaseController
{
	public function index()
	{
        $M_user = new \App\Models\M_user();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		$data = [
			'page' => 'Home',
			'user_info' => $user_info
		];
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_tambahdhu');
	}
}
