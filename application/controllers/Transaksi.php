<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('Transaksi_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Obat";
		$data['obat'] = $this->Transaksi_model->get_obat(); 
		$data['user'] = $this->Transaksi_model->get_user(); 
        $this->load->view("layout/header");
        $this->load->view("transaksi/vw_transaksi", $data);
        $this->load->view("layout/footer");	
	}
	public function tampil()
	{
		$data['judul'] = "Data Transaksi";
            $data['transaksi'] = $this->Transaksi_model->tampil(); 
            $this->load->view("layout/header");
            $this->load->view("Transaksi/vw_tampil_transaksi", $data);
            $this->load->view("layout/footer");
	}
	public function hapus($id)
	{
		$this->Obat_model->delete($id);
		redirect('Transaksi');
	}
	
}