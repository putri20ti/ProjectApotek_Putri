<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public $table = 'transaksi';
    public $id = 'transaksi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $id = $this->session->userdata('id');
        $this->db->select('k.*, s.nama as nama, s.harga_jual as harga_jual,s.satuan as satuan');
        $this->db->from('transaksi k');
        $this->db->join('obat s', 'k.id_obat = s.id');
        $this->db->where('k.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function delete_all($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_user', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    function charts()
    {
        $this->db->select('t.*, o.nama as obat, sum(t.jumlah) as jum');
        $this->db->from('transaksi t');
        $this->db->join('obat o', 't.id_obat = o.id');
        $this->db->group_by('t.id_obat');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function ttransaksi()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}