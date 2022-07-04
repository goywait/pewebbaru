<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function index()
    {

        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->kode = '0002';
        $this->mk1->nama = 'Statistika';
        $this->mk1->sks = '3';

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->kode = '0003';
        $this->mk2->nama = 'UI/UX';
        $this->mk2->sks = '4';

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->kode = '0004';
        $this->mk3->nama = 'Komunikasi Efektif';
        $this->mk3->sks = '2';

        $all_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['all_mk'] = $all_mk;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('matakuliah/view_matakuliah', $data);
        $this->load->view('partial/footer');
    }
}
