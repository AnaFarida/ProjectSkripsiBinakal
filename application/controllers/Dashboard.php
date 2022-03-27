<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        // public function __construct()
	// {
	// 	parent::__construct();
	// 	cek_session();
	// }

	public function index()
	{
        $data['judul'] = 'Dashboard Admin';
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();

        echo 'Selamat Datang' . $data['pengguna']['nama'] ;

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/templates/footer');

	}
}