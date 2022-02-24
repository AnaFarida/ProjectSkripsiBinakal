<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDBD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
        $this->load->library('form_validation');
    }

    public function index()
	{
       
        $data['title'] = "Dashboard Admin";
        $data['datadbd'] = $this->ModelData->getdata()->result();
       
       //var_dump($data);
        $this->db->get('datadbd')->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/dataset/datadbd', $data);
        $this->load->view('dashboard/templates/footer');

	}

    public function tambahdata()
    {
     
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('nama_desa', 'desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['datadbd'] = $this->ModelData->tampil_data()->result();

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/DataDBD', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $dataPost = array(
                'tahun' => $this->input->post('tahun'),
                'jml_penderita' => $this->input->post('jml_penderita'),
                'jml_meninggal' => $this->input->post('jml_meninggal')
            );
           

            if ($this->ModelData->getdata($dataPost)) {
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
                redirect('DataDBD');
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
                redirect('DataDBD');
            }
        }
    }

    public function editdata($id = null)
    {
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('nama_desa', 'desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['datadbd'] = $this->ModelData->tampil_data()->result();
            $data['detail'] = $this->ModelData->detail($id);

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/DataDBD/editdata', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $update = $this->ModelData->update(array(
                'id_data'   => $this->input->post('id_data'),
                'id_desa'   => $this->input->post('id_desa'),
                'tahun' => $this->input->post('tahun'),
                'jml_penderita' => $this->input->post('jml_penderita'),
                'jml_meninggal' => $this->input->post('jml_meninggal')
            ), $id);
            if ($update) {
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
                redirect('DataDBD');
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
                redirect('DataDBD');
            }
        }
    }


    function hapus($id)
	{
		$where = array('id_desa' => $id);

		$delete = $this->ModelData->delete($where);

		if ($delete) {
			echo "<script>alert('Data berhasil di hapus');</script>";
			redirect('DataDBD','refresh');
		}else{
			echo "<script>alert('Data gagal di hapus');</script>";
			redirect('DataDBD','refresh');
		}
	}
      
}