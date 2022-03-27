<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman Login';
			$this->load->view('login/header', $data);
			$this->load->view('login/index');
			$this->load->view('login/footer');
		} else {
			//validasinya berhasil
			 $this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		
		if ($user) {
			//jika usernya ada
			if ($user['is_active'] == 1) {
				//jika user aktif
				if (password_verify($password, $user['password'])) {
					$data = [
						'nama'			=> $user['nama'],
						'email'			=> $user['email'],
						'image'			=> $user['image'],
						'alamat'			=> $user['alamat'],
						'telepon'	=> $user['telepon'],
						'password'		=> $user['password'],
						'is_active' 		=> $user['is_active']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-success alert-dismissible text-left fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-satisfied"></i></span>
						<span class="alert-text"><strong>Selamat datang,</strong> ' . $this->session->userdata('nama') . ' !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('Dashboard');
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger alert-dismissible text-left fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
						<span class="alert-text"><strong>Password Salah!</strong> Pastikan password anda benar dan tidak kurang dari 6 karakter!</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('Admin/Login');
				}
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible text-left fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
					<span class="alert-text"><strong>Akun telah di Non-Aktifkan!</strong> Hubungi administrator untuk mengaktifkan akun anda!</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
				);
				redirect('Admin/Login');
			}
		} else {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible text-left fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
					<span class="alert-text"><strong>Akun belum terdaftar!</strong> Pastikan anda memiliki akun yang aktif serta terdaftar!</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('Admin/Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('telepon');
		$this->session->unset_userdata('image');
		$this->session->unset_userdata('is_active');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Anda berhasil keluar!</strong> Silahkan masuk kembali untuk melanjutkan!</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
		);
		redirect('Admin/Login');
	}
}