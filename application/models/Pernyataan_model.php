<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pernyataan_model extends CI_Model
{
    public $table = 'tbl_pernyataan';
    public $id = 'id';
    public $order = 'DESC';

    public function json()
    {
        $this->datatables->select('p.*, p.id');
        $this->datatables->from("tbl_pernyataan p");
        $this->datatables->add_column('action', anchor(site_url('pernyataan/cetak/$1'),'<i class="fa fa-print" aria-hidden="true"></i>','class="btn btn-info btn-sm"','target="_blank"'), 'id');
        return $this->datatables->generate();
    }
    public function insert($data)
    {
        $this->db->insert($this->table,$data);
    }
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    // Select max id
    function max()
    {
        $this->db->select('MAX(id) as id');
        $this->db->from("tbl_pernyataan");
        // $this->db->get();
    }


}