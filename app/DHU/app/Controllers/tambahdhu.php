<?php

namespace App\Controllers;

class tambahdhu extends BaseController
{
	public function index()
	{
        $M_user = new \App\Models\M_user();
		$M_stel_135 = new \App\Models\M_stel_135();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		$penguji = $M_user->getUser();
		$stel = $M_stel_135->getStel();
		$data = [
			'page' => 'Home',
			'user_info' => $user_info,
			'penguji' => $penguji,
			'stel' => $stel
		];
		// var_dump($data['penguji']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_tambahdhu');
	}
}
