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
       
        $data['title'] = "Data DBD | Dashboard Admin";
        $data['datadbd'] = $this->ModelData->getdata()->result();
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();
       
       //var_dump($data);
        $this->db->get('datadbd')->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/dataset/dataDBD', $data);
        $this->load->view('dashboard/templates/footer');

	}

    public function tambahdata()
    {
     
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('jml_meninggal', 'jumlah meninggal', 'required|numeric');
        $this->form_validation->set_rules('nama_desa', 'desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['datadbd'] = $this->ModelData->tampil_data()->result();
            $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/DataDBD', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $dataPost = array(
                'tahun' => $this->input->post('tahun'),
                'jml_penderita' => $this->input->post('jml_penderita'),
                'jml_meninggal' => $this->input->post('jml_meninggal'),
            );
           

            if ($this->ModelData->getdata($dataPost)) {
                $this->session->set_flashdata(
                    'message',
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
                    'message',
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

    public function editdata($id)
    {
        $this->form_validation->set_rules('jml_penderita', 'jumlah penderita', 'required|numeric');
        $this->form_validation->set_rules('jml_meninggal', 'jumlah meninggal', 'required|numeric');
        $this->form_validation->set_rules('nama_desa', 'desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();
            $data['datadbd'] = $this->ModelData->getdata()->result();
            $data['detail'] = $this->ModelData->detail($id);

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/dataset/edit_data', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $id_data = $this->input->post('id_data');
            $update = $this->ModelData->update(array(
                'jml_penderita' => $this->input->post('jml_penderita'),
                'jml_meninggal' => $this->input->post('jml_meninggal')
            ), $id_data);
            if ($update) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Selamat,</strong> Data berhasil diubah !</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('DataDBD');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                        <span class="alert-text"><strong>Maaf,</strong> Data gagal diubah !</span>
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