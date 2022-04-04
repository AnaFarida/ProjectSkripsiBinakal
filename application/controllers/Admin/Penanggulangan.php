<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penanggulangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPenanggulangan');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array();

        $data['title'] = "Dashboard Admin";
        $data['penanggulangan'] = $this->ModelPenanggulangan->tampil_data()->result();
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/penanggulangan', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('penanggulangan', 'Penanggulangan', 'required|trim|max_length[100]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['penanggulangan'] = $this->ModelPenanggulangan->tampil_data()->result();

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/penanggulangan', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $dataPost = array(
                'penanggulangan' => $this->input->post('penanggulangan'),
                'created' => date('Y-m-d H:i:s'),
                'updated' => date('Y-m-d H:i:s'),
            );

            if ($this->ModelPenanggulangan->create($dataPost)) {
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
                redirect('Admin/penanggulangan');
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
                redirect('Admin/penanggulangan');
            }
        }
    }

    public function update($id = null)
    {
        $this->form_validation->set_rules('penanggulangan', 'Penanggulangan', 'required|trim|max_length[100]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['penanggulangan'] = $this->ModelPenanggulangan->tampil_data()->result();
            $data['detail']    = $this->ModelPenanggulangan->detail($id);

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/edit_data', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $update = $this->ModelPenanggulangan->update(array(
                'id_pnglngan'   => $this->input->post('id_pnglngan'),
                'penanggulangan'      => $this->input->post('penanggulangan')
            ), $id);
            if ($update) {
                $this->session->set_flashdata(
                    'success_msg',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Selamat,</strong> Data berhasil diperbaharui !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
                );
                redirect('Admin/penanggulangan');
            } else {
                $this->session->set_flashdata(
                    'error_msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Maaf,</strong> data gagal diperbaharui !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
                );
                redirect('Admin/penanggulangan');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->ModelPenanggulangan->delete($id);
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
            redirect('Admin/penanggulangan');
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
            redirect('Admin/penanggulangan');
        }
    }
}