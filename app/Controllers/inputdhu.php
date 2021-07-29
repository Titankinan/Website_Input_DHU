<?php

namespace App\Controllers;

class inputdhu extends BaseController
{
	public function index()
	{
        $M_user = new \App\Models\M_user();
		// $M_stel_135 = new \App\Models\M_stel_135();
		// $M_stel_136 = new \App\Models\M_stel_136();
		// $M_stel_137 = new \App\Models\M_stel_137();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		// $penguji = $M_user->getUser();
		// $stel_135 = $M_stel_135->getStel();
		// $stel_136 = $M_stel_136->getStel();
		// $stel_137 = $M_stel_137->getStel();
		$data = [
			'page' => 'Home',
			'user_info' => $user_info
			// 'penguji' => $penguji,
			// 'stel_135' => $stel_135,
			// 'stel_136' => $stel_136,
			// 'stel_137' => $stel_137
		];
		// var_dump($data['penguji']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_inputdhu');
	}
}
