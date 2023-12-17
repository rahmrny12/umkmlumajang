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

    public function riwayat_transaksi()
    {
        $data['title'] = 'Biodata';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembayaran'] = $this->db->from('pembayaran')
                                ->select(['pembayaran.*', 'user.name'])
                                ->join('user', 'user.id = pembayaran.id_user', 'left')
                                ->get()->result_array();

        $this->load->view('templates/sb_header_user', $data);
        $this->load->view('admin/riwayat_transaksi');
        $this->load->view('templates/sb_footer_user');
    }

    public function detail_transaksi($idTransaksi)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'get_all_data');
        $data['items'] = $this->get_all_data->get_all_data();

		$data['pembayaran'] = $this->db->from('pembayaran')->where('id', $idTransaksi)->get()->row();
		$data['itemProduk'] = $this->db->select(['pembayaran.*', 'detail_transaksi.*', 'barang.*', 'gudang.harga'])
			->from('pembayaran')
			->join('detail_transaksi', 'detail_transaksi.no_transaksi = pembayaran.no_transaksi', 'left')
			->join('barang', 'barang.id = detail_transaksi.id_barang', 'left')
			->join('gudang', 'gudang.id_barang = barang.id', 'left')
			->where('pembayaran.id', $idTransaksi)->get()->result();
		
		// $data['itemProduk'] = $this->db->select(['barang.id as id', 'barang.*', 'gudang.harga as harga'])
		// 	->from('barang')
		// 	->join('pembayaran', 'pembayaran.id = barang.id', 'left')
		// 	->join('gudang', 'gudang.id_barang = barang.id', 'left')
		// 	->where('barang.id', $data['pembayaran']->id_barang)->get()->result();
		//var_dump($data['pembayaran']);die;

        $this->load->view('admin/detail_transaksi', $data);
    }
}
