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
		session()->set('id_laporan', $id_laporan);
        $M_user = new \App\Models\M_user();
		$M_laporan = new \App\Models\M_laporan();
		$M_aktivitas = new \App\Models\M_aktivitas();
		$M_uji = new \App\Models\M_uji();
		$M_stel_135 = new \App\Models\M_stel_135();
		$M_stel_136 = new \App\Models\M_stel_136();
		$M_stel_137 = new \App\Models\M_stel_137();

		$id_user = session()->get('loggedUser');
		$user_info = $M_user->find($id_user);
		// $id_laporan = session()->get('id_laporan');
		$detail = $M_laporan->getById($id_laporan);
		$penguji1 = $M_user->getById($detail['penguji1']);
		$penguji2 = $M_user->getById($detail['penguji2']);
		$aktivitas = $M_aktivitas->getById($id_laporan);
		$uji = $M_uji->getById($id_laporan);
		// $stel = $detail['id_stel'];
		if ($detail['id_stel'] == "stel_135")
		{
			$stel = $M_stel_135->getStel();
		} elseif ($detail['id_stel'] == "stel_136") {
			$stel = $M_stel_136->getStel();
		} elseif ($detail['id_stel'] == "stel_137") {
			$stel = $M_stel_137->getStel();
		}
		$data = [
			'page' => 'Input DHU',
			'user_info' => $user_info,
			'id_laporan' => $id_laporan,
			'detail' => $detail,
			'penguji1' => $penguji1,
			'penguji2' => $penguji2,
			'aktivitas' => $aktivitas,
			'stel' => $stel,
			'uji' => $uji
		];
		// var_dump($data['uji'][0]['no']);
		echo view('template/background');
		echo view('template/header', $data);
		echo view('V_inputdhu');
	}

	public function saveDet()
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

	public function saveAct()
	{
		$id_laporan = $this->request->getPost('id_laporan');
		$M_aktivitas = new \App\Models\M_aktivitas();
		$row = $this->request->getPost('row');

		// $x = 1;
		// $id_user = $this->request->getPost('id_user'.$x);
		// var_dump('id_user'.$x);

		for ($x = 1; $x <= $row; $x++) {
			$id_user = $this->request->getPost('id_user'.$x);
			$tanggal = $this->request->getPost('tanggal'.$x);
			$activity = $this->request->getPost('activity'.$x);
			$kondisi_awal = $this->request->getPost('kondisi_awal'.$x);
			$data = [
				'id_laporan' => $id_laporan,
				'id_user' => $id_user,
				'tanggal' => $tanggal,
				'activity' => $activity,
				'kondisi_awal' => $kondisi_awal
			];
			$query = $M_aktivitas->insert($data);
		}
		return redirect()->to('inputdhu/input/'.$id_laporan);
	}

	public function saveUji()
	{
		$id_laporan = $this->request->getPost('id_laporan');
		$M_uji = new \App\Models\M_uji();
		$row = $this->request->getPost('baris');

		// for ($x = 1; $x < $row; $x++) {
		// 	echo $x;
		// }
		// var_dump($row);

		for ($x = 1; $x <= $row; $x++) {
			$id_user = $this->request->getPost('id_user'.$x);
			$no = $this->request->getPost('no'.$x);
			$tanggal = $this->request->getPost('tanggal'.$x);
			$hasil_uji = $this->request->getPost('hasil_uji'.$x);
			$data = [
				'id_laporan' => $id_laporan,
				'id_user' => $id_user,
				'no' => $no,
				'tanggal' => $tanggal,
				'hasil_uji' => $hasil_uji
			];
			$query = $M_uji->insert($data);
		}
		return redirect()->to('inputdhu/input/'.$id_laporan);
	}

	public function deleteAct($id_aktivitas)
	{
		$id_laporan = session()->get('id_laporan');
		$M_aktivitas = new \App\Models\M_aktivitas();
		$M_aktivitas->where('id_aktivitas', $id_aktivitas)->delete();
		return redirect()->to('inputdhu/input/'.$id_laporan);
	}

	public function deleteUji($id_uji)
	{
		$id_laporan = session()->get('id_laporan');
		$M_uji = new \App\Models\M_uji();
		$M_uji->where('id_uji', $id_uji)->delete();
		return redirect()->to('inputdhu/input/'.$id_laporan);
	}

}
