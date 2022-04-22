<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDesa extends CI_Model
{

    public function tampil_datadesa()
    {
        return $this->db->get('desa');
    }

    public function create($data = array())
    {
        return $this->db->insert('desa', $data);
    }

    public function detail($id)
    {
        $this->db->where('id_desa', $id);
        return $this->db->get('desa')->result();
    }

    public function delete($id)
    {
        $this->db->where("id_desa", $id);
        return $this->db->delete("desa");
    }

    function update($data, $id_desa)
    {
        return $this->db->update('desa', $data, array('id_desa' => $id_desa));
    }
}