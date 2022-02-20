<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelPengguna');
    }

    public function index(){
        $data['title'] = "Dashboard Admin";
        $data['pengguna'] = $this->ModelPengguna->tampil_data()->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/pengguna', $data);
        $this->load->view('dashboard/templates/footer');
	}

    public function tambah(){
       $nama = $this->input->post('nama');
       $email = $this->input->post('email');
       $alamat = $this->input->post('alamat');
       $telepon = $this->input->post('telepon');
       $password = $this->input->post('password');

       $data = array(
           'nama'   => $nama,
           'email'   => $email,
           'alamat'   => $alamat,
           'telepon'   => $telepon,
           'password'   => $password,
       );

       $this->ModelPengguna->input_data($data, 'pengguna');
       redirect('pengguna/index');
    }

    public function hapus_data($id_nama)
    {
        $this->ModelPengguna->hapus_data($id_nama);
        redirect('pengguna');
    }

    public function edit_data($id_nama)
    {
        $where = array('id_nama' => $id_nama);
        $data['pengguna'] = $this->ModelPengguna->edit_data($where,
        'pengguna')->result();
    }

    public function update()
    {
        $id_nama = $this->input->post('id_nama');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $password = $this->input->post('password');

       $data = array(
           'id_nama'    =>$id_nama,
           'nama'       => $nama,
           'email'      => $email,
           'alamat'     => $alamat,
           'telepon'    => $telepon,
           'password'   => $password,
       );

       $where = array('id_nama' => $id_nama);
       $this->ModelPengguna->update_data($where,$data, 'pengguna');
       redirect('pengguna/index');
    }

}