<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    // public function __construct()
    // {
        
    // }

    public function home()
    {
        $this->load->view('admin/home');
    }

    public function list_produk()
    {
        $this->load->view('admin/list_produk');
    }

    public function dashboard()
    {
        $this->load->view('user/dashboard');
    }

    public function biodata()
    {
        $data['title'] = 'Biodata';
        $nama_pemilik = !empty($this->input->post('nama_pemilik')) ? $this->input->post('nama_pemilik') : 0;
        $nik = !empty($this->input->post('nik')) ? $this->input->post('nik') : 0;
        $no_kk = !empty($this->input->post('no_kk')) ? $this->input->post('no_kk') :0;
        $jk = !empty($this->input->post('jk')) ? $this->input->post('jk') :0;
        $status = !empty($this->input->post('status')) ? $this->input->post('status') :0;
        $tmp_lhr = !empty($this->input->post('tmp_lhr')) ? $this->input->post('tmp_lhr') :0;
        $tgl_lhr = !empty($this->input->post('tgl_lhr')) ? $this->input->post('tgl_lhr') :0;
        $alm_ktp = !empty($this->input->post('alm_ktp')) ? $this->input->post('alm_ktp') :0;
        $prov = !empty($this->input->post('prov')) ? $this->input->post('prov') :0;
        $kota = !empty($this->input->post('kota')) ? $this->input->post('kota') :0;
        $kec = !empty($this->input->post('kec')) ? $this->input->post('kec') :0;
        $kel = !empty($this->input->post('kel')) ? $this->input->post('kel') :0;
        $alm_dms = !empty($this->input->post('alamat_dom')) ? $this->input->post('alamat_dom') : 0;
        $kp = !empty($this->input->post('kode_pos')) ? $this->input->post('kode_pos') :0;
        $wa = !empty($this->input->post('wa')) ? $this->input->post('wa') :0;
        $hp = !empty($this->input->post('hp')) ? $this->input->post('hp') :0;
        $email = !empty($this->input->post('email')) ? $this->input->post('email') :0;
        $up_ktp = !empty($this->input->post('up_ktp')) ? $this->input->post('up_ktp') :0;
        $up_kk = !empty($this->input->post('up_kk')) ? $this->input->post('up_kk') :0;

        $data1 = array(
            'nama_pemilik' => $nama_pemilik,
            'nik' => $nik,
            'no_kk' => $no_kk,
            'jk' => $jk,
            'status' => $status,
            'tmp_lhr' => $tmp_lhr,
            'tgl_lhr' => $tgl_lhr,
            'alm_ktp' => $alm_ktp,
            'prov'=> $prov,
            'kota' => $kota,
            'kec' => $kec,
            'kel' => $kel,
            'hp'=> $hp,
            'alamat_dom' => $alm_dms,
            'kode_pos' => $kp,
            'wa' => $wa,
            'email' => $email,
            'up_ktp' => $up_ktp,
            'up_kk' => $up_kk 
        );

        $this->db->insert('biodata', $data1);


        $this->load->view('templates/sb_header_user', $data);
        $this->load->view('biodata');
        $this->load->view('templates/sb_footer_user');
    }

}