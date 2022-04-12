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

    function detail($id){
        $this->db->select('*');
        $this->db->from('datadbd');
        $this->db->join('desa','desa.id_desa = datadbd.id_desa');
        $this->db->where('id_data', $id);      
        $query = $this->db->get();
        return $query->row();
     }


    function update($data, $id_data) {
		return $this->db->update('datadbd', $data, array('id_data' => $id_data));
    }

    public function hitungJumlahdesa(){   
    $this->db->select_sum('nama_desa');
    $query = $this->db->get('desa');
    if($query->num_rows()>0){
        return $query->row()->nama_desa;
        }else{
        return 0; 
        }
    }

    public function hitungJumlahPenderita(){   
    $this->db->select_sum('jml_penderita');
    $query = $this->db->get('datadbd');
    if($query->num_rows()>0){
        return $query->row()->jml_penderita;
        }else{
        return 0;
        }
    }

    public function hitungJumlahMeninggal(){   
        $this->db->select_sum('jml_meninggal');
        $query = $this->db->get('datadbd');
        if($query->num_rows()>0){
            return $query->row()->jml_meninggal;
            }else{
            return 0;
            }
        }

    // public function getDataGfaric($id_desa='')
    // {
    //     $this->db->select('datadbd.*');
    //     $this->db->select('desa.nama_desa AS nama');
    //     $this->db->from('datadbd');
    //     $this->db->join('desa', 'datadbd.id_desa = desa.id_desa');

    //     //filter data sesuai id yang dikirim dari controller
	// 	if($id_desa != '') {
	// 		$this->db->where('datadbd.id_desa', $id_desa);
	// 	}

    //     $this->db->order_by('desa.id_desa ASC, desa.nama_desa ASC');

	// 	$query = $this->db->get();

	// 	//$query->result_array = mengirim data ke controller dalam bentuk semua data
    //     return $query->result_array();
	// }
}
    