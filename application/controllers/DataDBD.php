<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDBD extends CI_Controller
{
    public function index()
	{
        // $data['judul'] = "Dashboard Admin"
        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/navbar');
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/DataDBD');
        $this->load->view('dashboard/templates/footer');

	}
      
}