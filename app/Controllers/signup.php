<?php

namespace App\Controllers;

class signup extends BaseController
{
	public function index()
	{
        echo view('template/background');
		echo view('V_signup');
	}

	public function register()
	{
		// echo $this->input->post('nama');
        // $this->form_rules();
		helper('form');
		$validation = $this->validate([
			'nama' => 'required',
			'email' => 'required|valid_email|is_unique[user.email]',
			'password' => 'required',
			'cpassword' => 'required|matches[password]',
			// 'paraf' => 'uploaded[paraf]|mime_in[paraf,image/jpg,image/jpeg,image/png]'
		]);
		// echo view('template/background');
		if($validation) 
		{
			$nama				= $this->request->getPost('nama');
			$email				= $this->request->getPost('email');
			$password			= $this->request->getPost('password');		//md5($this->input->post('password'));
			// $paraf				= $this->request->getPost('cpassword');
			$file				= $this->request->getFile('paraf');
			$newName = $file->getRandomName();
			$newGambar = $file->move(ROOTPATH . 'public\paraf', $newName);
			$paraf				= $file->getName();
			
			// $path 				= $this->request->getFile('paraf')->store(ROOTPATH . 'public/paraf', 'user_name.jpg');
			// $path = $this->request->getFile('paraf')->store();
			// $paraf				= $this->input->post('username');
			
			$data = [
				'nama' => $nama,
				'email' => $email,
				'password' => $password,
				'paraf'  => $paraf
			];

			$M_user = new \App\Models\M_user();
			$query = $M_user->insert($data);
			// $this->M_user->insert($data,'user');
			// $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			//   Berhasil Register, Silahkan Login!
			//   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			// </div>');
			return redirect()->to('login'); 
			// redirect('landing');
			// $this->load->view('template_admin/header');
			// $this->load->view('register_form');
			// $this->load->view('template_admin/footer');
		} else {
			echo view('template/background');
			return view('V_signup', ['validation' => $this->validator]);
		}
	}

	// public function form_rules()
	// {
	// 	$this->form_validation->set_rules('no_ktp','No_ktp','required');
	// 	$this->form_validation->set_rules('nama','Nama','required');
	// 	$this->form_validation->set_rules('email','Email','required');
	// 	$this->form_validation->set_rules('username','Username','required');
	// 	$this->form_validation->set_rules('password','Password','required');
	// }
}
