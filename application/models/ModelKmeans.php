<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModelKmeans extends CI_Model
{
    public function __construct()    {
        parent::__construct();
        $this->load->database();
    }

    // GET DATA dari Model
    function getAll()   {
        return $this->db->query("SELECT desa.*, datadbd.* FROM desa JOIN datadbd ON desa.id_desa = datadbd.id_desa")->result_array();
    }
    function getDesa()   {
        return $this->db->query("SELECT * FROM desa")->result_array();
    }
    function getPenanggulangan()   {
        return $this->db->query("SELECT * FROM penanggulangan")->result_array();
    }

    // GET DATA dari Model
    function getData()   {
        return $this->db->query("SELECT jml_penderita, jml_meninggal FROM datadbd")->result_array();
    }

    // GET DATA dari Model
    function getNamaDesa()   {
        return $this->db->query("SELECT nama_desa FROM desa, datadbd WHERE desa.id_desa = datadbd.id_desa")->result_array();
    }

    // GET Jumlah Row dataset
    function hitungBaris()  {
        return $this->db->query("SELECT * FROM datadbd")->num_rows();
    }

    function getRel() {
        return $this->db->query("SELECT desa.*, datadbd.* FROM desa JOIN datadbd ON desa.id_desa = datadbd.id_desa")->result_array();
    }

}