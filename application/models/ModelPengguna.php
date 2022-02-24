<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPengguna extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tampil_data()
    {
        return $this->db->get('pengguna');
    }

    public function create($data = array())
    {
        return $this->db->insert('pengguna', $data);
    }

    public function delete($id)
    {
        $this->db->where("id_nama", $id);
        return $this->db->delete("pengguna");
    }    

    public function update($data, $id)
    {
        $this->db->where('id_nama', $id);
        return $this->db->update('pengguna', $data);
    }

    public function detail($id)
    {
        $this->db->where('id_nama', $id);
        return $this->db->get('pengguna')->result();
    }

  
}

