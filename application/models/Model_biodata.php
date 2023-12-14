<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_biodata extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_data_diri($data) {
        $this->db->insert('data_diri', $data);
    }

	public function add_data_umkm($data) {
        $this->db->insert('data_umkm', $data);
    }

	public function add_data_lainnya($data) {
        $this->db->insert('data_lain', $data);
    }
}
