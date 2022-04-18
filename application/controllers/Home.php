<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelData');
        }

	public function index()
	{
                $data['title'] = 'Tentang Puskesmas | SIG_DBD';

                $this->load->view('home/templates/header', $data);
                $this->load->view('home/templates/navbar');
                $this->load->view('home/index');
                $this->load->view('home/templates/footer');

	}

        public function KMeans()
        {
                $data['datadbd'] = $this->ModelData->getdata()->result();
                $data['title'] = 'KMeans Clustering | SIG_DBD';

                $this->load->view('home/templates/header', $data);
                $this->load->view('home/templates/navbar');
                $this->load->view('home/klustering', $data);
                $this->load->view('home/templates/footer');
        }

        public function AboutDBD()
        {
                $data['datadbd'] = $this->ModelData->getdata()->result();
                $data['title'] = 'Tentang DBD | SIG_DBD';

                $this->load->view('home/templates/header', $data);
                $this->load->view('home/templates/navbar');
                $this->load->view('home/aboutDbd', $data);
                $this->load->view('home/templates/footer');
        }



}