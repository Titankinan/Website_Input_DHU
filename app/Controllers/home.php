<?php

namespace App\Controllers;

class home extends BaseController
{
	public function index()
	{
		$M_user = new \App\Models\M_user();
		$M_laporan = new \App\Models\M_laporan();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		$laporan = $M_laporan->getByPenguji($id_user);
		$data = [
			'page' => 'Home',
			'user_info' => $user_info,
			'laporan' => $laporan
		];
		// var_dump($data['laporan']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_home');
	}
}
