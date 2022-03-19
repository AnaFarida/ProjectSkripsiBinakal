<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModelKmeans extends CI_Model
{
    public function __construct()    {
        parent::__construct();
        $this->load->database();
    }

    // DATA RANDOM
    public function random($jk)    {
        return $this->db->query("SELECT jml_penderita, jentik_rumah, jentik_sekolah FROM datadbd")->result_array();
    }

    // GET DATA dari Model
    function getAll()   {
        return $this->db->query("SELECT * FROM datadbd")->result_array();
    }

    // GET DATA dari Model
    function getData()   {
        return $this->db->query("SELECT jml_penderita, jentik_rumah, jentik_sekolah FROM datadbd")->result_array();
    }

    // GET DATA dari Model
    function getNama()   {
        return $this->db->query("SELECT nama_desa FROM desa, datadbd WHERE desa.id_desa = datadbd.id_desa")->result_array();
    }

    // GET Jumlah Row dataset
    function hitungBaris()  {
        return $this->db->query("SELECT * FROM datadbd")->num_rows();
    }

}