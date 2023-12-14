<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if($this->session->userdata()) {
			// $this->load->view('templates/hdr_home');
			$this->load->view('home');
			// $this->load->view('templates/ftr_home');
		} else {
			redirect('auth/login');
		}
	}

	public function login()
{
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
        $data['title'] = 'Login Page';
        $this->load->view('templates/sb_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/sb_footer');
    } else {
        $this->_login();
    }
}

private function _login()
{
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
	// var_dump($user); die;

    if ($user) {
        // Jika Usernya ada
        if ($user['is_active'] == 1) {
            // Cek Password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated!</div>');
            redirect('auth/login');
        }
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
        redirect('auth/login');
    }
}


	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', 
		['is_unique' => 'This email has already registered!'
	]);
		$this->form_validation->set_rules('password1','password', 'required|trim|min_length[3]|matches[password2]', 
		['matches' => 'Password dont match!',
		 'min_length' => 'Password too short!'
	]);
	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Registration';
			$this->load->view('templates/sb_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/sb_footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time(),
			]; 
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulatioin! your account has been created. Please Login</div>');
			redirect('auth/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been Logged Out!</div>');
		redirect('auth/login');
	}
}