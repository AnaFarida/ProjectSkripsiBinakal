<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPengguna extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('pengguna');
    }

    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function hapus_data($id_nama){
        $this->db->where('id_nama', $id_nama);
        $this->db->delete('pengguna');
    }

    public function edit_data($where, $table){
       return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}

