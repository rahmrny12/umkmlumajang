<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_biodata');
        // $this->load->model('Model_user', 'model');
    }

    public function index()
    {
		if(empty($this->session->userdata('email'))){
			redirect('auth/login');
		}

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/sb_header_user', $data);
        $this->load->view('user/dashboard');
        $this->load->view('templates/sb_footer_user');
    }

    public function add_produk()
    {
        $data['title'] = 'Tambah Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/sb_header_user', $data);
            $this->load->view('user/add_produk');
            $this->load->view('templates/sb_footer_user');
        } else {
            $kode = !empty($this->input->post('kode_barang')) ? $this->input->post('kode_barang') : 0;
            $nama_barang = !empty($this->input->post('nama_barang')) ? $this->input->post('nama_barang') : 0;
            $harga = !empty($this->input->post('harga')) ? $this->input->post('harga') : 0;
            // $stok = !empty($this->input->post('stok')) ? $this->input->post('stok') : 0;
            // $foto = !empty($this->input->post('foto_barang')) ? $this->input->post('foto_barang') : 0;
            $tanggal = !empty($this->input->post('tanggal')) ? $this->input->post('tanggal') : 0;

            $config['upload_path']   = './assets/sb-admin/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 10000;

            $this->load->library('upload', $config);

            $data_table1 = array(
                'kode_barang' => $kode,
                'nama_barang' => $nama_barang,
                'foto_barang' => $_FILES['foto_barang_1']['name'],
                'tanggal' => $tanggal,
				'harga' => $harga
            );

            $this->db->insert('barang', $data_table1);

            $id_barang = $this->db->insert_id();

            for ($i = 1; $i <= 5; $i++) {
                if (isset($_FILES['foto_barang_' . $i]['name']) && !empty($_FILES['foto_barang_' . $i]['name'])) {
                    if ($this->upload->do_upload('foto_barang_' . $i)) {
                        $data_upload = $this->upload->data();
                        $foto = $data_upload['file_name'];

                        $data_table3 = array(
                            'foto' => $foto,
                            'id_barang' => $id_barang
                        );
            
                        $this->db->insert('galeri', $data_table3);
                    } else {
                        $error = $this->upload->display_errors();
                        // echo $error;
                        // return;
                        $foto = 'default_image.jpg';
                    }
                }
            }

            // $data_table2 = array(
            //     'id_barang' => $id_barang,
            //     'harga' => $harga,
            //     'stok' => $stok
            // );
            // $this->db->insert('gudang', $data_table2);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user/add_produk');
        }
    }

    public function lapak()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'get_all_data');
        $data['items'] = $this->get_all_data->get_all_data();

        $this->load->view('lapak', $data);
    }

    public function lapak_detail($id)
    {
        $data['title'] = 'Lapak Detail';
        $this->load->model('Model_user', 'id');
        $data['id'] = $this->id->getId($id);
        // var_dump($data['id']);

        $this->load->view('umkm/lapak_detail', $data);
    }

	public function biodata()
    {
        $data['title'] = 'Biodata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_diri'] = $this->db->get_where('data_diri', ['id_user' => $data['user']['id']])->row_array();
		$data['data_umkm'] = $this->db->get_where('data_umkm', ['id_user' => $data['user']['id']])->row_array();
		$data['data_lain'] = $this->db->get_where('data_lain', ['id_user' => $data['user']['id']])->row_array();

		if($data['user']['role_id'] == 1){
			redirect('/admin/biodata');
		}

		// if(!$data['data_diri']){
		// 	$data['data_diri'] = [];
		// }

        $this->load->view('templates/sb_header_user', $data);
        $this->load->view('biodata');
        $this->load->view('templates/sb_footer_user');
    }

	public function add_biodata()
	{
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$config["allowed_types"] ="*";
		$config['max_size'] = '4096';
		$config['upload_path'] = './assets/uploads/';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('ktp')) {
			$this->ktp = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('kk')) {
			$this->kk = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}
		
		$data = [
			'id_user' => $user['id'],
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'nik' => $this->input->post('nik'),
			'no_kk' => $this->input->post('no_kk'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_nikah' => $this->input->post('status_nikah'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat_ktp' => $this->input->post('alamat_ktp'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'alamat_domisili' => $this->input->post('alamat_domisili'),
			'kode_pos' => $this->input->post('kode_pos'),
			'wa' => $this->input->post('wa'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
		];


		if(empty($this->input->post('id'))){
			array_push($data, [
				'ktp' => $this->ktp['file_name'],
				'kk' => $this->kk['file_name'],
			]);
			$this->Model_biodata->add_data_diri($data);
		} else {
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('data_diri', $data);
		}
		return redirect('user/biodata');
	}

	public function add_umkm()
	{
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$config["allowed_types"] ="*";
		$config['max_size'] = '4096';
		$config['upload_path'] = './assets/uploads/';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto_nib')) {
			$this->foto_nib = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('foto_produk')) {
			$this->foto_produk = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}
		
		$data = [
			'id_user' => $user['id'],
			'nama_umkm' => $this->input->post('nama_umkm'),
			'nib' => $this->input->post('nib'),
			'sektor_usaha' => $this->input->post('sektor_usaha'),
			'jenis_usaha' => $this->input->post('jenis_usaha'),
			'ekonomi_kreatif' => $this->input->post('ekonomi_kreatif'),
			'tanggal_mulai_usaha' => $this->input->post('tanggal_mulai_usaha'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'alamat_usaha' => $this->input->post('alamat_usaha'),
			'alamat_usaha' => $this->input->post('alamat_usaha'),
			'kode_pos_usaha' => $this->input->post('kode_pos_usaha'),
			'jumlah_tenaga_kerja_laki_laki' => $this->input->post('jumlah_tenaga_kerja_laki_laki'),
			'jumlah_tenaga_kerja_perempuan' => $this->input->post('jumlah_tenaga_kerja_perempuan'),
			'jumlah_karyawan_laki_laki' => $this->input->post('jumlah_karyawan_laki_laki'),
			'jumlah_karyawan_perempuan' => $this->input->post('jumlah_karyawan_perempuan'),
			'website' => $this->input->post('website'),
			'status_tempat_usaha' => $this->input->post('status_tempat_usaha'),
			'bentuk_usaha' => $this->input->post('bentuk_usaha'),
			'uraian_usaha' => $this->input->post('uraian_usaha'),
			'bahan_bakar_utama' => $this->input->post('bahan_bakar_utama'),
			'kapasitas_produksi_harian' => $this->input->post('kapasitas_produksi_harian'),
			'satuan_produksi' => $this->input->post('satuan_produksi'),
			'nominal_aset' => $this->input->post('nominal_aset'),
			'modal_sendiri' => $this->input->post('modal_sendiri'),
		];

		if(empty($this->input->post('id'))){
			array_push($data, [
				'foto_nib' => $this->foto_nib['file_name'],
				'foto_produk' => $this->foto_produk['file_name'],
			]);
			$this->Model_biodata->add_data_umkm($data);
		} else {
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('data_umkm', $data);
		}
		return redirect('user/biodata');
	}

	public function add_lainnya()
	{
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$config["allowed_types"] ="*";
		$config['max_size'] = '4096';
		$config['upload_path'] = './assets/uploads/';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto_selfie')) {
			$this->foto_selfie = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_npwp_pemilik')) {
			$this->upload_npwp_pemilik = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_bpom')) {
			$this->upload_bpom = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_sertifikat_halal')) {
			$this->upload_sertifikat_halal = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_pirt')) {
			$this->upload_pirt = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_npwpd')) {
			$this->upload_npwpd = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}

		if ($this->upload->do_upload('upload_npwp_usaha')) {
			$this->upload_npwp_usaha = $this->upload->data();
		} elseif (empty($this->input->post('id'))) {
			echo $this->upload->display_errors(); die;
		}
		
		$data = [
			'id_user' => $user['id'],
			'no_pirt' => $this->input->post('no_pirt'),
			'sektor_usaha_tambahan' => $this->input->post('sektor_usaha_tambahan'),
			'data_usaha_tambahan' => $this->input->post('data_usaha_tambahan'),
			'foto_selfie' => $this->foto_selfie['file_name'],
			'npwp_pemilik' => $this->input->post('npwp_pemilik'),
			'bpom' => $this->input->post('bpom'),
			'sertifikat_halal' => $this->input->post('sertifikat_halal'),
			'pinjaman_bank' => $this->input->post('pinjaman_bank'),
			'pinjaman_perorangan' => $this->input->post('pinjaman_perorangan'),
			'pinjaman_koperasi' => $this->input->post('pinjaman_koperasi'),
			'bantuan_pemerintah' => $this->input->post('bantuan_pemerintah'),
			'modal_luar' => $this->input->post('modal_luar'),
			'npwpd_usaha' => $this->input->post('npwpd_usaha'),
			'npwp_usaha' => $this->input->post('npwp_usaha'),
		];

		if(empty($this->input->post('id'))){
			array_push($data, [
				'upload_npwp_pemilik' => $this->upload_npwp_pemilik['file_name'],
				'upload_bpom' => $this->upload_bpom['file_name'],
				'upload_sertifikat_halal' => $this->upload_sertifikat_halal['file_name'],
				'upload_pirt' => $this->upload_pirt['file_name'],
				'upload_npwpd' => $this->upload_npwpd['file_name'],
				'upload_npwp_usaha' => $this->upload_npwp_usaha['file_name'],
			]);
        	$this->Model_biodata->add_data_lainnya($data);
		} else {
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('data_lain', $data);
		}
		return redirect('user/biodata');
	}

	public function add_to_cart() {
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_barang = !empty($this->input->post('id_barang')) ? $this->input->post('id_barang') : 0;
		$kuantitas = !empty($this->input->post('kuantitas')) ? $this->input->post('kuantitas') : 0;
		
		$data = array(
			'id_user' => $user['id'],
			'id_barang' => $id_barang,
			'kuantitas' => $kuantitas,
		);

		$cek_keranjang = $this->db->get_where('keranjang', ['id_barang' => $id_barang, 'id_user' => $user['id']])->row();
		if ($cek_keranjang) {
			$result = $this->db->where('id', $cek_keranjang->id)->update('keranjang', [
				'kuantitas' => $cek_keranjang->kuantitas + $kuantitas
			]);

			$id_keranjang = $cek_keranjang->id;
		} else {
			$result = $this->db->insert('keranjang', $data);
			
			$id_keranjang = $this->db->insert_id();
		}

		$keranjang = $this->db->select('*')->from('keranjang')->where(['keranjang.id' => $id_keranjang])->join('barang', 'barang.id = keranjang.id_barang')->get()->row_array();

		if ($result) {
			echo json_encode([
				'data' => $keranjang,
				'status' => 'SUCCESS'
			]);		
		}	
	}

	public function list_produk()
    {
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$data['keranjang'] = $this->db->select('*')->from('keranjang')->where(['id_user' => $user['id']])->join('barang', 'barang.id = keranjang.id_barang')->get()->result_array();
		
        $this->load->view('admin/list_produk', $data);
    }

    public function pembayaran()
    {
        $this->load->view('user/pembayaran');
    }
}