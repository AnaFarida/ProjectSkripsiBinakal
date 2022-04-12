<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPengguna');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array();

        //Flashdata
        if ($this->session->userdata('success_msg')) {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }

        $data['title'] = "Dashboard Admin";
        
        $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
        $this->session->userdata('email')])->row_array();

        $data['penggunaAll'] = $this->ModelPengguna->tampil_data()->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/navbar', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/pengguna', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pengguna.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('telepon', 'No Telepon', 'required|numeric|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[255]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[100]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['pengguna'] = $this->ModelPengguna->tampil_data()->result();

            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/pengguna', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $dataPost = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'password' => password_hash($this->input->post('password1'),
                PASSWORD_DEFAULT),
                'is_active' => 1,
                'created' => date('Y-m-d H:i:s'),
            );

            if ($this->ModelPengguna->create($dataPost)) {
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
                redirect('Pengguna');
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
                redirect('Pengguna');
            }
        }
    }

    public function update($id = null)
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nohp', 'No Telepon', 'required|numeric|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[255]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[100]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard Admin";
            $data['editpengguna'] = $this->ModelPengguna->tampil_data()->result();
            $data['detail']    = $this->ModelPengguna->detail($id);
            $data['pengguna'] = $this->db->get_where('pengguna', ['email' => 
            $this->session->userdata('email')])->row_array();
            $this->load->view('dashboard/templates/header', $data);
            $this->load->view('dashboard/templates/navbar', $data);
            $this->load->view('dashboard/templates/sidebar', $data);
            $this->load->view('dashboard/pengguna/edit_data', $data);
            $this->load->view('dashboard/templates/footer');
        } else {
            $update = $this->ModelPengguna->update(array(
                'id_nama'   => $this->input->post('id_nama'),
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'alamat'    => $this->input->post('alamat'),
                'telepon'   => $this->input->post('nohp'),
                'password'  => $this->input->post('password1')
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
                redirect('Pengguna');
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
                redirect('Pengguna');
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->ModelPengguna->delete($id);
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
            redirect('Pengguna');
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
            redirect('Pengguna');
        }
    }
}