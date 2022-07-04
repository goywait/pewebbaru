<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

	public function index()
	{
		$this->load->model('dosen_model', 'dsn1');
		$this->dsn1->id = 1;
		$this->dsn1->nidn = '010101';
		$this->dsn1->nama = 'Mamat Setiawan';
		$this->dsn1->pendidikan = 'S2 mipa';

		$this->load->model('dosen_model', 'dsn2');
		$this->dsn2->id = 2;
		$this->dsn2->nidn = '010102';
		$this->dsn2->nama = 'Syahwani Putri';
		$this->dsn2->pendidikan = 'S2 mipa';

		$list_dsn = [$this->dsn1, $this->dsn2];
		$data['list_dsn'] = $list_dsn;

		$this->load->view('header');
		$this->load->view('dosen/index', $data);
		$this->load->view('footer');
	}
}
