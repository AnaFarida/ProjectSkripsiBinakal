<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPenanggulangan extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil_data()
    {
        return $this->db->get('penanggulangan');
    }

    public function create($data = array())
    {
        return $this->db->insert('penanggulangan', $data);
    }

    public function delete($id)
    {
        $this->db->where("id_pnglngan", $id);
        return $this->db->delete("penanggulangan");
    }    

    public function update($data, $id)
    {
        $this->db->where('id_pnglngan', $id);
        return $this->db->update('penanggulangan', $data);
    }

    public function detail($id)
    {
        $this->db->where('id_pnglngan', $id);
        return $this->db->get('penanggulangan')->result();
    }

  
}