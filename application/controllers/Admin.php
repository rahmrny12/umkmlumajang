<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function home()
    {
        $this->load->view('admin/home');
    }

    public function dashboard()
    {
        $this->load->view('user/dashboard');
    }

    public function lapak_detail($id)
    {
        $this->load->view('lapak/lapak_detail');
    }

    public function biodata()
    {
        $data['title'] = 'Biodata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_all'] = $this->db->get_where('user')->result_array();

        $this->load->view('templates/sb_header_user', $data);
        $this->load->view('admin/biodata');
        $this->load->view('templates/sb_footer_user');
    }

	public function biodata_show($id)
	{
		$data['title'] = 'Biodata';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_show'] = $this->db->get_where('user', ['id' => $id])->row_array();
		$data['data_diri'] = $this->db->get_where('data_diri', ['id_user' => $id])->row_array();
		$data['data_umkm'] = $this->db->get_where('data_umkm', ['id_user' => $id])->row_array();
		$data['data_lain'] = $this->db->get_where('data_lain', ['id_user' => $id])->row_array();

		$this->load->view('templates/sb_header_user', $data);
        $this->load->view('admin/show_biodata');
        $this->load->view('templates/sb_footer_user');
	}
}
