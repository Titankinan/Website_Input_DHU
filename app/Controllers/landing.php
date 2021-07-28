<?php

namespace App\Controllers;

class landing extends BaseController
{
	public function index()
	{
		echo view('template/background');
		echo view('V_landing');
	}
}
