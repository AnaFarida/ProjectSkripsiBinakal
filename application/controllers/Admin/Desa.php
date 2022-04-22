<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDesa');
        $this->load->library('form_validation');
        cek_session();
    }
public function index()
    {
        $data = array();

		 //Flashdata
         if ($this->session->userdata('success_msg')) {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }

        $data['title'] = "Data Desa | Dashboard Admin";
        $data['desa'] = $this->ModelDesa->tampil_datadesa()->result();
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/dataset/dataDesa', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function tambahdesa()
    {
        $this->form_validation->set_rules('nama_desa', 'desa', 'required|trim');
        $this->form_validation->set_rules('geojson', 'geojson', 'required|trim');
        $this->form_validation->set_rules('latitude', 'latitude', 'required|trim');
        $this->form_validation->set_rules('longtitude', 'longtitude', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['desa'] = $this->ModelDesa->tampil_datadesa()->result();

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/dataset/dataDesa', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $dataPost = array(
                'nama_desa' => $this->input->post('nama_desa'),
                'geojson' => $this->input->post('geojson'),
                'latitude' => $this->input->post('latitude'),
                'longtitude' => $this->input->post('longtitude'),
            );
            if ($this->ModelDesa->create($dataPost)) {
                $this->session->set_flashdata(
                    'success_msg',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Selamat,</strong> Data berhasil ditambahkan !</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Admin/Desa');
            } else {
                $this->session->set_flashdata(
                    'error_msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Maaf,</strong> Data gagal ditambahkan !</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Admin/Desa');
            }
        }
    }

    public function update($id = null)
    {
        $this->form_validation->set_rules('geojson', 'geojson', 'required|trim');
        $this->form_validation->set_rules('latitude', 'latitude', 'required|trim');
        $this->form_validation->set_rules('longtitude', 'longtitude', 'required|trim');
        $this->form_validation->set_rules('nama_desa', 'nama_desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['pengguna'] = $this->db->get_where('pengguna', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['desa'] = $this->ModelDesa->tampil_datadesa()->result();
            $data['detaildesa'] = $this->ModelDesa->detail($id);

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/dataset/editDesa', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $update = $this->ModelDesa->update(array(
                'id_desa' => $this->input->post('id_desa'),
                'nama_desa' => $this->input->post('nama_desa'),
                'geojson' => $this->input->post('geojson'),
                'latitude' => $this->input->post('latitude'),
                'longtitude' => $this->input->post('longtitude')
            ), $id);
            if ($update) {
                $this->session->set_flashdata(
                    'success_msg',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Selamat,</strong> Data berhasil diubah !</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Admin/desa');
            } else {
                $this->session->set_flashdata(
                    'error_msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Maaf,</strong> Data gagal diubah !</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Admin/desa');
            }
       }  
     }

     public function delete($id)
    {
        $delete = $this->ModelDesa->delete($id);
        if ($delete) {
            $this->session->set_flashdata(
                'success_msg',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Selamat,</strong> Data berhasil dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
            );
            redirect('Admin/desa');
        } else {
            $this->session->set_flashdata(
                'error_msg',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Maaf,</strong> data gagal dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
            );
            redirect('Admin/desa');
        }
    }
}