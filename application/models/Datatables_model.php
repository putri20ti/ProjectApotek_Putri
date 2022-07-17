<?php

class Datatables_model extends CI_Model{

    public $table = 'obat';
    public $id = 'obat.id';
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