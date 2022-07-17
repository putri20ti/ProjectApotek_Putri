<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

      function __construct(){
            parent::__construct();
		// is_logged_in2();
            $this->load->model('Datatables_model');
      }
      public function index(){
            $data['judul'] = "Data Obat";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
            $data['obat'] = $this->Datatables_model->get(); 
            $this->load->view("layout/header",$data);
            $this->load->view("Datatable/vw_datatables", $data);
            $this->load->view("layout/footer");
      }
}