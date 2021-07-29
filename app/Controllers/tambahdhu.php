<?php

namespace App\Controllers;

class tambahdhu extends BaseController
{
	public function index()
	{
        $M_user = new \App\Models\M_user();
		$M_stel_135 = new \App\Models\M_stel_135();
		$M_stel_136 = new \App\Models\M_stel_136();
		$M_stel_137 = new \App\Models\M_stel_137();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		$penguji = $M_user->getUser();
		$stel_135 = $M_stel_135->getStel();
		$stel_136 = $M_stel_136->getStel();
		$stel_137 = $M_stel_137->getStel();
		$data = [
			'page' => 'Home',
			'user_info' => $user_info,
			'penguji' => $penguji,
			'stel_135' => $stel_135,
			'stel_136' => $stel_136,
			'stel_137' => $stel_137
		];
		// var_dump($data['penguji']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_tambahdhu');
	}

	public function insertdhu()
	{
		helper('form');
		$validation = $this->validate([
			'stel' => 'required',
			'penguji1' => 'required',
			'penguji2' => 'required|differs[penguji1]'
		]);

		if($validation) 
		{
			$stel = $this->request->getPost('stel');
			$penguji1 = $this->request->getPost('penguji1');
			$penguji2 = $this->request->getPost('penguji2');
			$data = [
				'id_stel' => $stel,
				'penguji1' => $penguji1,
				'penguji2' => $penguji2,
				'aksi' => 'mulai'
			];
			$M_laporan = new \App\Models\M_laporan();
			$query = $M_laporan->insert($data);
			$id_laporan = $M_laporan->getInsertID();
			session()->set('id_laporan', $id_laporan);
			return redirect()->to('inputdhu/input/'.$id_laporan);
		} else {
			return redirect()->to('tambahdhu');
		}
	}

}
