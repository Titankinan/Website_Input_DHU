<?php

namespace App\Controllers;

class cetak extends BaseController
{
	public function dhu($id_laporan)
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
		$detail = $M_laporan->getById($id_laporan);
		$penguji1 = $M_user->getById($detail['penguji1']);
		$penguji2 = $M_user->getById($detail['penguji2']);
		$aktivitas = $M_aktivitas->getById($id_laporan);
		$uji = $M_uji->getById($id_laporan);

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

		// echo view('template/background');
		// echo view('template/header', $data);
		// echo view('V_home');
        // echo view('template/header_cetak');
        echo view('V_cetak', $data);
        // echo view('template/footer_cetak');
	}
}
