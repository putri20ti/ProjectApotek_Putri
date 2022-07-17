<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        // $this->load->model('Detail_model');
        $this->load->model('Obat_model');
        $this->load->model('Transaksi_model');
        $this->load->model('Datatables_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer");
    }
    public function Obat()
    {
        $data['judul'] = "Daftar Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_obat", $data);
        $this->load->view("layout/footer", $data);
    }
    public function transaksi($id)
    {
        $data['transaksi'] = $this->Transaksi_model->get();
        $data['judul'] = "Detail Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->getById($id);
       
        $this->form_validation->set_rules('jumlah',  'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
           
            $this->load->view("layout/header", $data);
            $this->load->view("profil/vw_transaksi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_obat' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
                
                
            ];
            $this->Transaksi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Transaksi Berhasil!</div>');
            redirect('Profil/detail');
        }
    }
    public function detail()
    {
        $data['transaksi'] = $this->Transaksi_model->get();
        $data['judul'] = "Detail Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->get();
      
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_detail_transaksi", $data);
        $this->load->view("layout/footer");

    }
    public function export()
    {
    $dompdf = new Dompdf();
    $this->data['transaksi'] = $this->Transaksi_model->get();
    $this->data['title'] = 'Laporan Data Transaksi';
    $dompdf->setPaper('A4', 'Landscape');
    $html = $this->load->view('profil/report', $this->data, true);
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream('Laporan Data Transaksi Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
    public function deltransaksi($id)
    {
        $this->Transaksi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Transaksi Berhasil Dihapus!</div>');
        redirect('Profil/detail');
    }
    
}