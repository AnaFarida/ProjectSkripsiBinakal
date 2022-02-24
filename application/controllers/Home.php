<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->view('home/templates/header');
        $this->load->view('home/templates/navbar');
        $this->load->view('home/index');
        $this->load->view('home/templates/footer');

	}

        public function K_Means()
        {
                $this->load->view('home/templates/header');
                $this->load->view('home/templates/navbar');
                $this->load->view('home/K_Means');
                $this->load->view('home/templates/footer'); 
        }

        public function Hasil()
        {
                $this->load->view('home/templates/header');
                $this->load->view('home/templates/navbar');
                $this->load->view('home/Hasil');
                $this->load->view('home/templates/footer'); 
        }
}
