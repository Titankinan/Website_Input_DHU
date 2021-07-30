<?php

namespace App\Controllers;

class inputdhu extends BaseController
{
	public function index()
	{
        $M_user = new \App\Models\M_user();
		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		$id_laporan = session()->get('id_laporan');
		$data = [
			'page' => 'Input DHU',
			'user_info' => $user_info,
			'id_laporan' => $id_laporan
		];
		// var_dump($data['penguji']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_inputdhu');
	}

	public function input($id_laporan)
	{
        $M_user = new \App\Models\M_user();
		$M_laporan = new \App\Models\M_laporan();

		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		// $id_laporan = session()->get('id_laporan');
		$detail = $M_laporan->getById($id_laporan);
		$penguji1 = $M_user->getById($detail['penguji1']);
		$penguji2 = $M_user->getById($detail['penguji2']);
		$data = [
			'page' => 'Input DHU',
			'user_info' => $user_info,
			'id_laporan' => $id_laporan,
			'detail' => $detail,
			'penguji1' => $penguji1,
			'penguji2' => $penguji2
		];
		// var_dump($detail['penguji1']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_inputdhu');
	}

	public function save()
	{
		$button = $this->request->getPost('action');
		if($button == "Save") 
		{
			$id_laporan = $this->request->getPost('id_laporan');
			$spk = $this->request->getPost('spk');
			$perangkat = $this->request->getPost('perangkat');
			$merk = $this->request->getPost('merk');
			$tipe = $this->request->getPost('tipe');
			$noseri = $this->request->getPost('noseri');
			$data = [
				'spk' => $spk,
				'perangkat' => $perangkat,
				'merk' => $merk,
				'tipe' => $tipe,
				'noseri' => $noseri
			];
			$M_laporan = new \App\Models\M_laporan();
			$query = $M_laporan->update($id_laporan, $data);
			// $query = $M_laporan->insert($data);
			return redirect()->to('inputdhu/input/'.$id_laporan);
		} else {
			$id_laporan = $this->request->getPost('id_laporan');
			$spk = $this->request->getPost('spk');
			$perangkat = $this->request->getPost('perangkat');
			$merk = $this->request->getPost('merk');
			$tipe = $this->request->getPost('tipe');
			$noseri = $this->request->getPost('noseri');
			$data = [
				'spk' => $spk,
				'perangkat' => $perangkat,
				'merk' => $merk,
				'tipe' => $tipe,
				'noseri' => $noseri,
				'aksi' => 'cetak'
			];
			$M_laporan = new \App\Models\M_laporan();
			$query = $M_laporan->update($id_laporan, $data);
			// $query = $M_laporan->insert($data);
			return redirect()->to('home');
		}
	}

	public function insAktifitas()
	{
		
	}

}
