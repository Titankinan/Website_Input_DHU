<?php

namespace App\Controllers;

class login extends BaseController
{
	public function index()
	{
        echo view('template/background');
		echo view('V_login');
	}

    public function check()
	{
        $validation = $this->validate([
			'email' => 'required|valid_email|is_not_unique[user.email]',
			'password' => 'required'
		]);

        if($validation) 
		{
			$email				= $this->request->getPost('email');
			$password			= $this->request->getPost('password');		//md5($this->input->post('password'));
            // $M_user = model('App\Models\M_user', false);
			$M_user = new \App\Models\M_user();
			$user = $M_user->where('email', $email)->first();
            $checkpass = $M_user->check_login($email, $password);
            
            if ($checkpass == FALSE){
				return redirect()->to('login');
			}else{
                $data = $user;
                // $id_user = $data[0]->id_user;
				$id_user = $data['id_user'];
                session()->set('loggedUser', $id_user);
                // $session = \Config\Services::session();
                // $session->set('nama', $data[0]->nama);
                // var_dump($data[0]->nama);
                // echo ($data[0]->nama);
                return redirect()->to('home');
            }


		} else {
			echo view('template/background');
			return view('V_login', ['validation' => $this->validator]);
		}
	}

	public function logout()
	{
		if (session()->has('loggedUser')){
			session()->remove('loggedUser');
			return redirect()->to('landing');
		}
	}
}