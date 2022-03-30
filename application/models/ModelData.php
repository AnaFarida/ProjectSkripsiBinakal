<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelData extends CI_Model{
   
    public function tampil_data()
    {
        return $this->db->get('datadbd');
    }

    public function getdata()
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->join('datadbd', 'datadbd.id_desa = desa.id_desa');
        return $this->db->get();
    }


    // public function getdata()
    // {
    //     $query = $this->db->query("SELECT * FROM datadbd JOIN desa 
    //     ON datadbd.id_desa = desa.id_desa ORDER BY datadbd.jml_penderita ASC");
    //     return $query->result();
    // }


    public function getdataset()
    {
        $query = $this->db->query("SELECT * FROM datadbd ORDER BY jml_penderita ASC");
        return $query->result();
    }

    function getdatabyid($id)
	{
		$query = $this->db->query("SELECT * FROM datadbd WHERE id_data = '$id' ");

		return $query->row();
	}

	function save($data)
	{
		$this->db->insert('datadbd', $data);
		$this->db->insert('desa', $data);

		return true;
	}
    public function getTahunFilter()
    {
        $query = $this->db->query("SELECT tahun FROM datadbd Group by tahun");
        return $query->result();
    }

    function detail(){
        $this->db->select('*');
        $this->db->from('datadbd');
        $this->db->join('desa','desa.id_desa = datadbd.id_desa');      
        $query = $this->db->get();
        return $query;
     }

    


    
}