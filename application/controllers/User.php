<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_biodata');
        // $this->load->model('Model_user', 'model');

		if(empty($this->session->userdata('email'))){
			redirect('auth/login');
		}
    }

    public function index()
    {
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
            $stok = !empty($this->input->post('stok')) ? $this->input->post('stok') : 0;
            $alamat = !empty($this->input->post('alamat')) ? $this->input->post('alamat') : 0;
            $wa = !empty($this->input->post('wa')) ? $this->input->post('wa') : 0;
            // $foto = !empty($this->input->post('foto_barang')) ? $this->input->post('foto_barang') : 0;
            $tanggal = !empty($this->input->post('tanggal')) ? $this->input->post('tanggal') : 0;

            $config['upload_path']   = './assets/sb-admin/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 10000;

            $this->load->library('upload', $config);

			if (isset($_FILES['foto_barang_1']['name']) && !empty($_FILES['foto_barang_1']['name'])) {
				if ($this->upload->do_upload('foto_barang_1')) {
					$data_upload = $this->upload->data();
					$foto = $data_upload['file_name'];
				} else {
					$error = $this->upload->display_errors();
					echo $error;
					return;
					$foto = 'default_image.jpg';
				}
			}

			$data_table1 = array(
                'kode_barang' => $kode,
                'nama_barang' => $nama_barang,
                'alamat' => $alamat,
                'wa' => $wa,
                'foto_barang' => $foto,
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
                        echo $error;
                        return;
                        $foto = 'default_image.jpg';
                    }
                }
            }
            
            $data_table2 = array(
                'id_barang' => $id_barang,
                'stok' => $stok,
                'harga' => $harga
            );
            
            $this->db->insert('gudang', $data_table2);

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
		$keyword = $this->input->get('keyword');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'get_all_data');
        $data['items'] = $this->get_all_data->get_all_data($keyword);
        // var_dump($data['items'][0]);die;

        $this->load->view('lapak', $data);
    }

    public function pembayaran()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'get_all_data');
        $data['items'] = $this->get_all_data->get_all_data();
		$data['bank'] = $this->db->from('data_bank')->get()->result();

		// $data['itemProduk'] = $this->get_all_data->getId($idProduk);

		$data['itemProduk'] = $this->db->select(['keranjang.*', 'barang.*', 'gudang.*'])->from('keranjang')->where(['id_user' =>$data['user']['id']])->join('barang', 'barang.id = keranjang.id_barang')->join('gudang', 'barang.id = gudang.id_barang')->get()->result_array();

        $this->load->view('user/pembayaran', $data);
    }

	public function simpan_pembayaran()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$jumlahtransaksi = $this->db->from('pembayaran')->get()->num_rows();

		$input['id_user'] = $data['user']['id'];
		$input['no_transaksi'] = date('Ymd') . '-' . ($jumlahtransaksi + 1);

		$itemProduk = $this->db->select(['keranjang.*', 'barang.*', 'gudang.harga'])->from('keranjang')->where(['id_user' =>$data['user']['id']])->join('barang', 'barang.id = keranjang.id_barang')->join('gudang', 'barang.id = gudang.id_barang')->get()->result_array();

		$this->db->insert('pembayaran', $input);
		$insert_id = $this->db->insert_id();

		$total = 0;
		foreach ($itemProduk as $produk) {
			$harga = intval(str_replace('.', '', substr($produk['harga'], 3))) * $produk['kuantitas'];
			$total += $harga;
			$detail = [
				'no_transaksi' => $input['no_transaksi'],
				'id_barang' => $produk['id_barang'],
				'kuantitas' => $produk['kuantitas'],
				'total_harga' => $harga,
			];
			$this->db->insert('detail_transaksi', $detail);
		}

		$this->db->where('no_transaksi', $input['no_transaksi']);
		$this->db->update('pembayaran', ['total_transaksi' => $total]);

		return $this->output->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode([
			'id_transaksi' => $insert_id
		]));
	}

    public function bukti_transaksi($idTransaksi)
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

        $this->load->view('user/bukti_transaksi', $data);
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

	public function remove_from_cart() {
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id_barang = !empty($this->input->get('id_barang')) ? $this->input->get('id_barang') : 0;
		
		$where = array(
			'id_user' => $user['id'],
			'id_barang' => $id_barang,
		);

		$result = $this->db->delete('keranjang', $where);
		
		return redirect('/user/list_produk');
	}

	public function add_to_cart() {
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_barang = !empty($this->input->get('id_barang')) ? $this->input->get('id_barang') : 0;
		$kuantitas = !empty($this->input->get('kuantitas')) ? $this->input->get('kuantitas') : 1;
		
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

		$keranjang = $this->db->select(['keranjang.*', 'barang.*', 'gudang.harga'])->from('keranjang')->where(['keranjang.id' => $id_keranjang])->join('barang', 'barang.id = keranjang.id_barang')->join('gudang', 'barang.id = gudang.id_barang')->get()->row_array();

		return redirect('/user/list_produk');
	}

	public function list_produk()
    {
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$data['keranjang'] = $this->db->select(['keranjang.*', 'barang.*', 'gudang.*'])->from('keranjang')->where(['id_user' => $user['id']])->join('barang', 'barang.id = keranjang.id_barang')->join('gudang', 'barang.id = gudang.id_barang')->get()->result_array();
		
        $this->load->view('admin/list_produk', $data);
    }

	public function upload_bukti_pembayaran()
	{
		$config["allowed_types"] ="*";
		$config['max_size'] = '4096';
		$config['upload_path'] = './assets/uploads/bukti_pembayaran';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload('bukti_pembayaran')) {
			$data_upload = $this->upload->data();
			$foto = $data_upload['file_name'];

			$data = array(
				'bukti_pembayaran' => $foto,
				'no_transaksi' => $this->input->post('no_transaksi')
			);

			$this->db->insert('bukti_pembayaran', $data);

			echo json_encode($data, 200);
		} else {
			echo json_encode($this->upload->display_errors(), 400);
		}
	}
	
	public function produk()
    {
		$keyword = $this->input->get('keyword');
		$data['title'] = 'Produk Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Model_user', 'get_all_data');
        $data['items'] = $this->get_all_data->get_all_data($keyword);

        $this->load->view('produk', $data);
    }
}
