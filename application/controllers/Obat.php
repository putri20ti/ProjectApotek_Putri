<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('User_model', 'userrole');
		$this->load->model('Obat_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Datatables_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Obat";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
		$data['obat'] = $this->Obat_model->get(); 
        $this->load->view("layout/header",$data);
        $this->load->view("obat/vw_obat", $data);
        $this->load->view("layout/footer");
	}
	public function hapus($id)
	{
		$this->Obat_model->delete($id);
		redirect('Obat');
	}
	public function tambah()
		{
	    $data['judul'] = "Halaman Tambah Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Obat'] = $this->Obat_model->get();
        $this->form_validation->set_rules('nama', 'Nama Obat', 'required', [
            'required' => 'Nama Obat Wajib Diisi!'
        ]);
		$this->form_validation->set_rules('satuan', 'Satuan', 'required', [
            'required' => 'satuan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|integer', [
            'required' => 'Harga Beli Wajib Diisi!', 'integer' => 'Harga Wajib Angka'
        ]);
		$this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|integer', [
            'required' => 'Harga Jual Wajib Diisi!', 'integer' => 'Harga Wajib Angka'
        ]);
        $this->form_validation->set_rules('jumlah_stok', 'Stok', 'required|integer', [
            'required' => 'Stok Wajib Diisi!', 'integer' => 'Stok Wajib Angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("obat/vw_tambah_obat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
				'satuan' => $this->input->post('satuan'),
				'harga_beli' => $this->input->post('harga_beli'),
				'harga_jual' => $this->input->post('harga_jual'),
				'jumlah_stok' => $this->input->post('jumlah_stok'),
            ];
            $this->Obat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data 
            Obat Berhasil Ditambah!</div>');
            redirect('Obat');
        }
    }
	public function upload()
		{
			$data = [
				'nama' => $this->input->post('nama'),
				'satuan' => $this->input->post('satuan'),
				'harga_beli' => $this->input->post('harga_beli'),
				'harga_jual' => $this->input->post('harga_jual'),
				'jumlah_stok' => $this->input->post('jumlah_stok'),
			];
			$this->Obat_model->insert($data);
			redirect('Obat');
		}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Obat";
		$data['obat'] = $this->Obat_model->getById($id);
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Obat', 'required', [
            'required' => 'Nama Obat Wajib Diisi!'
        ]);
		$this->form_validation->set_rules('satuan', 'Satuan', 'required', [
            'required' => 'satuan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required|integer', [
            'required' => 'Harga Beli Wajib Diisi!', 'integer' => 'Harga Wajib Angka'
        ]);
		$this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|integer', [
            'required' => 'Harga Jual Wajib Diisi!', 'integer' => 'Harga Wajib Angka'
        ]);
        $this->form_validation->set_rules('jumlah_stok', 'Stok', 'required|integer', [
            'required' => 'Stok Wajib Diisi!', 'integer' => 'Stok Wajib Angka'
        ]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("obat/vw_ubah_obat", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
                'nama' => $this->input->post('nama'),
				'satuan' => $this->input->post('satuan'),
				'harga_beli' => $this->input->post('harga_beli'),
				'harga_jual' => $this->input->post('harga_jual'),
				'jumlah_stok' => $this->input->post('jumlah_stok'),
            ];
			$id = $this->input->post('id');
			$this->Obat_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Obat Berhasil 
			Diubah!</div>');
			redirect('Obat');
		}
	}
	public function update()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'satuan' => $this->input->post('satuan'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
		];
		$id = $this->input->post('id');
		$this->Obat_model->update(['id' => $id], $data);
		redirect('Obat');
	}
	function detail($id)
    {
        $data['judul'] = "Halaman Detail Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['obat']= $this->Obat_model->getById($id);
        $this->load->view('layout/header', $data);
        $this->load->view('obat/vw_detail_obat', $data);
        $this->load->view('layout/footer',$data);
    }
}