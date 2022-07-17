<?php

class Penjualan_model extends CI_Model{

    public $table = 'transaksi';
    public $id = 'transaksi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
}