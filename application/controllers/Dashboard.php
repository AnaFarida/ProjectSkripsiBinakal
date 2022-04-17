<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelData');
            cek_session();
        }

	public function index(){
        $data['title'] = 'Dashboard Admin';
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['total_desa'] = $this->ModelData->hitungJumlahdesa();
        $data['total_penderita'] = $this->ModelData->hitungJumlahPenderita();

        $data['total_meninggal'] = $this->ModelData->hitungJumlahMeninggal();

        $querydata = $this->db->query("SELECT desa.*, datadbd.* FROM desa JOIN datadbd ON desa.id_desa = datadbd.id_desa")->result();
        if ($querydata != null) {
                foreach ($querydata as $row) {
                        $data['nama_desa'][] = $row->nama_desa;
                        $data['jml_penderita'][] = (int) $row->jml_penderita;
                        $data['jml_meninggal'][] = (int) $row->jml_meninggal;
                }
                $data['barChart'] = json_encode($data);
        }

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/templates/footer', $data);

	}

        public function tes()
	{
        $data['title'] = 'Dashboard Admin';
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['total_desa'] = $this->ModelData->hitungJumlahdesa();
        $data['total_penderita'] = $this->ModelData->hitungJumlahPenderita();
        $data['total_meninggal'] = $this->ModelData->hitungJumlahMeninggal();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/tes');
        $this->load->view('dashboard/templates/footer');

        }

}