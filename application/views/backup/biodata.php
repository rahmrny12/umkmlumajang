<div class="row justify-content-center">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-body">
				<div class="tabs col-12">
					<div class="tab-button-outer">
						<ul id="tab-button">
							<li><a href="#data-diri" class="mr-2">Data Diri</a></li>
							<li><a href="#data-umkm" class="mr-2">Data UMKM</a></li>
							<li><a href="#data-lain" class="mr-2">Data Lain</a></li>
							<li><a href="#verifikasi">Verifikasi</a></li>
						</ul>
					</div>
					<div class="tab-select-outer">
						<select id="tab-select">
							<option value="#data-diri">Data Diri</option>
							<option value="#data-umkm">Data UMKM</option>
							<option value="#data-lain">Data Lain</option>
							<option value="#verifikasi">Verifikasi</option>
						</select>
					</div>

					<div id="data-diri" class="tab-contents">
						<h4>Data Diri Pemilik Perusahaan</h4>
						<h6 class="text-secondary">Data Personal</h6>
						<hr>
						<form action="<?= base_url(); ?>admin/add_biodata" method="POST" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="nama_pemilik" class="form-label">Nama Pemilik</label>
								<input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik">
							</div>
							<div class="mb-3">
								<label for="nik" class="form-label">NIK</label>
								<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
							</div>
							<div class="mb-3">
								<label for="no_kk" class="form-label">No. KK</label>
								<input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No. KK">
							</div>
							<div class="mb-3">
								<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
								<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
									<option value="">- Pilih -</option>
									<option value="laki-laki">Laki-Laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="status_nikah" class="form-label">Status Menikah</label>
								<select name="status_nikah" id="status_nikah" class="form-control">
									<option value="">- Pilih -</option>
									<option value="sudah">Sudah Menikah</option>
									<option value="belum">Belum Menikah</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="tmp_lahir" class="form-label">Tempat Lahir</label>
								<input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir">
							</div>
							<div class="mb-3">
								<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
								<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir">
							</div>
							<div class="mb-3">
								<label for="alamat_ktp" class="form-label">Alamat sesuai KTP</label>
								<textarea class="form-control" name="alamat_ktp" id="alamat_ktp" placeholder="Alamat KTP"></textarea>
							</div>
							<div class="mb-3">
								<label for="provinsi" class="form-label">Provinsi</label>
								<input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi">
							</div>
							<div class="mb-3">
								<label for="kota" class="form-label">Kota</label>
								<input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
							</div>
							<div class="mb-3">
								<label for="kecamatan" class="form-label">Kecamatan</label>
								<input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan">
							</div>
							<div class="mb-3">
								<label for="kelurahan" class="form-label">Kelurahan</label>
								<input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan">
							</div>
							<div class="mb-3">
								<label for="alamat_domisili" class="form-label">Alamat Domisili</label>
								<!-- <input type="text" class="form-control" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Domisili"> -->
								<textarea class="form-control" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Domisili"></textarea>
							</div>
							<div class="mb-3">
								<label for="kode_pos" class="form-label">Kode Pos</label>
								<input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos">
							</div>
							<div class="mb-3">
								<label for="wa" class="form-label">Whatsapp</label>
								<input type="number" class="form-control" name="wa" id="wa" placeholder="Whatsapp">
							</div>
							<div class="mb-3">
								<label for="no_hp" class="form-label">Nomor HP</label>
								<input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
							<div class="mb-3">
								<label for="ktp" class="form-label">Upload KTP</label>
								<input type="file" class="form-control" name="ktp" id="ktp">
							</div>
							<div class="mb-3">
								<label for="kk" class="form-label">Upload KK</label>
								<input type="file" class="form-control" name="kk" id="kk">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div id="data-umkm" class="tab-contents">
					<h4>Data Diri UMKM</h4>
						<h6 class="text-secondary">Data Personal</h6>
						<hr>
						<form action="<?= base_url(); ?>admin/add_umkm" method="POST" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="nama_umkm" class="form-label">Nama UMKM</label>
								<input type="text" class="form-control" name="nama_umkm" id="nama_umkm" placeholder="Nama UMKM">
							</div>
							<div class="mb-3">
								<label for="nib" class="form-label">NIB</label>
								<input type="text" class="form-control" name="nib" id="nib" placeholder="NIB">
							</div>
							<div class="mb-3">
								<label for="sektor_usaha" class="form-label">Sektor Usaha</label>
								<input type="text" class="form-control" name="sektor_usaha" id="sektor_usaha" placeholder="Sektor Usaha">
							</div>
							<div class="mb-3">
								<label for="jenis_usaha" class="form-label">Jenis Usaka</label>
								<input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Jenis Usaha">
								<!-- <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
									<option value="">- Pilih -</option>
									<option value="laki-laki">Laki-Laki</option>
									<option value="perempuan">Perempuan</option>
								</select> -->
							</div>
							<div class="mb-3">
								<label for="ekonomi_kreatif" class="form-label">Ekonomi Kreatif</label>
								<select name="ekonomi_kreatif" id="ekonomi_kreatif" class="form-control">
									<option value="">- Pilih -</option>
									<option value="ya">Ya</option>
									<option value="tidak">Tidak</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="tanggal_mulai_usaha" class="form-label">Tanggal Mulai Kerja</label>
								<input type="date" class="form-control" name="tanggal_mulai_usaha" id="tanggal_mulai_usaha" placeholder="Tanggal Mulai Kerja">
							</div>
							<div class="mb-3">
								<label for="provinsi" class="form-label">Provinsi</label>
								<input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi">
							</div>
							<div class="mb-3">
								<label for="kota" class="form-label">Kota</label>
								<input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
							</div>
							<div class="mb-3">
								<label for="kecamatan" class="form-label">Kecamatan</label>
								<input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan">
							</div>
							<div class="mb-3">
								<label for="kelurahan" class="form-label">Kelurahan</label>
								<input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan">
							</div>
							<div class="mb-3">
								<label for="alamat_usaha" class="form-label">Alamat Usaha</label>
								<!-- <input type="text" class="form-control" name="alamat_usaha" id="alamat_usaha" placeholder="Alamat Domisili"> -->
								<textarea class="form-control" name="alamat_usaha" id="alamat_usaha" placeholder="Alamat Domisili"></textarea>
							</div>
							<div class="mb-3">
								<label for="kode_pos_usaha" class="form-label">Kode Pos Usaha</label>
								<input type="text" class="form-control" name="kode_pos_usaha" id="kode_pos_usaha" placeholder="Kode Pos">
							</div>
							<div class="mb-3">
								<label for="jumlah_tenaga_kerja_laki_laki" class="form-label">Jumlah Tenaga Kerja Laki-laki</label>
								<input type="number" class="form-control" name="jumlah_tenaga_kerja_laki_laki" id="jumlah_tenaga_kerja_laki_laki" placeholder="Whatsapp">
							</div>
							<div class="mb-3">
								<label for="jumlah_tenaga_kerja_perempuan" class="form-label">Jumlah Tenaga Kerja Perempuan</label>
								<input type="number" class="form-control" name="jumlah_tenaga_kerja_perempuan" id="jumlah_tenaga_kerja_perempuan" placeholder="Whatsapp">
							</div>
							<div class="mb-3">
								<label for="jumlah_karyawan_laki_laki" class="form-label">Jumlah Karyawan Laki-laki</label>
								<input type="number" class="form-control" name="jumlah_karyawan_laki_laki" id="jumlah_karyawan_laki_laki" placeholder="Whatsapp">
							</div>
							<div class="mb-3">
								<label for="jumlah_karyawan_perempuan" class="form-label">Jumlah Karyawan Perempuan</label>
								<input type="number" class="form-control" name="jumlah_karyawan_perempuan" id="jumlah_karyawan_perempuan" placeholder="Whatsapp">
							</div>
							<div class="mb-3">
								<label for="website" class="form-label">Website</label>
								<input type="text" class="form-control" name="website" id="website" placeholder="Website">
							</div>
							<div class="mb-3">
								<label for="status_tempat_usaha" class="form-label">Status Tempat Usaha</label>
								<input type="status_tempat_usaha" class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" placeholder="Status Tempat Usaha">
							</div>
							<div class="mb-3">
								<label for="bentuk_usaha" class="form-label">Bentuk Usaha</label>
								<input type="bentuk_usaha" class="form-control" name="bentuk_usaha" id="bentuk_usaha" placeholder="Bentuk Usaha">
							</div>
							<div class="mb-3">
								<label for="uraian_usaha" class="form-label">Uraian Usaha</label>
								<input type="uraian_usaha" class="form-control" name="uraian_usaha" id="uraian_usaha" placeholder="Uraian Usaha">
							</div>
							<div class="mb-3">
								<label for="bahan_bakar_utama" class="form-label">Bahan Bakar Utama</label>
								<input type="bahan_bakar_utama" class="form-control" name="bahan_bakar_utama" id="bahan_bakar_utama" placeholder="Bahan Bakar Utama">
							</div>
							<div class="mb-3">
								<label for="kapasitas_produksi_harian" class="form-label">Kapasitas Produksi_Harian</label>
								<input type="kapasitas_produksi_harian" class="form-control" name="kapasitas_produksi_harian" id="kapasitas_produksi_harian" placeholder="Kapasitas Produksi Harian">
							</div>
							<div class="mb-3">
								<label for="satuan_produksi" class="form-label">Satuan Produksi</label>
								<input type="satuan_produksi" class="form-control" name="satuan_produksi" id="satuan_produksi" placeholder="Satuan Produksi">
							</div>
							<div class="mb-3">
								<label for="nominal_aset" class="form-label">Nominal Aset</label>
								<input type="nominal_aset" class="form-control" name="nominal_aset" id="nominal_aset" placeholder="Nominal Aset">
							</div>
							<div class="mb-3">
								<label for="modal_sendiri" class="form-label">Modal Sendiri</label>
								<input type="modal_sendiri" class="form-control" name="modal_sendiri" id="modal_sendiri" placeholder="Modal Sendiri">
							</div>
							<div class="mb-3">
								<label for="foto_nib" class="form-label">Upload NIB</label>
								<input type="file" class="form-control" name="foto_nib" id="foto_nib">
							</div>
							<div class="mb-3">
								<label for="foto_produk" class="form-label">Upload Produk</label>
								<input type="file" class="form-control" name="foto_produk" id="foto_produk">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div id="data-lain" class="tab-contents">
					<h4>Data Lain</h4>
						<h6 class="text-secondary">Data Tambahan</h6>
						<hr>
						<form action="<?= base_url(); ?>admin/add_lainnya" method="POST" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="no_pirt" class="form-label">No Pirt</label>
								<input type="text" class="form-control" name="no_pirt" id="no_pirt" placeholder="No Pirt">
							</div>
							<div class="mb-3">
								<label for="sektor_usaha_tambahan" class="form-label">Sektor Usaha Tambahan</label>
								<input type="text" class="form-control" name="sektor_usaha_tambahan" id="sektor_usaha_tambahan" placeholder="Sektor Usaha Tambahan">
							</div>
							<div class="mb-3">
								<label for="data_usaha_tambahan" class="form-label">Data Usaha Tambahan</label>
								<input type="text" class="form-control" name="data_usaha_tambahan" id="data_usaha_tambahan" placeholder="Data Usaha Tambahan">
							</div>
							<div class="mb-3">
								<label for="foto_selfie" class="form-label">Foto Selfie</label>
								<input type="file" class="form-control" name="foto_selfie" id="foto_selfie" placeholder="Foto Selfie">
							</div>
							<div class="mb-3">
								<label for="upload_npwp_pemilik" class="form-label">Upload Npwp Pemilik</label>
								<input type="file" class="form-control" name="upload_npwp_pemilik" id="upload_npwp_pemilik" placeholder="Upload Npwp Pemilik">
							</div>
							<div class="mb-3">
								<label for="upload_bpom" class="form-label">Upload Bpom</label>
								<input type="file" class="form-control" name="upload_bpom" id="upload_bpom" placeholder="Upload Bpom">
							</div>
							<div class="mb-3">
								<label for="upload_sertifikat_halal" class="form-label">Upload Sertifikat Halal</label>
								<input type="file" class="form-control" name="upload_sertifikat_halal" id="upload_sertifikat_halal" placeholder="Upload Sertifikat Halal">
							</div>
							<div class="mb-3">
								<label for="upload_pirt" class="form-label">Upload Pirt</label>
								<input type="file" class="form-control" name="upload_pirt" id="upload_pirt" placeholder="Upload Pirt">
							</div>
							<div class="mb-3">
								<label for="upload_npwpd" class="form-label">Upload Npwpd</label>
								<input type="file" class="form-control" name="upload_npwpd" id="upload_npwpd" placeholder="Upload Npwpd">
							</div>
							<div class="mb-3">
								<label for="upload_npwp_usaha" class="form-label">Upload Npwp Usaha</label>
								<input type="file" class="form-control" name="upload_npwp_usaha" id="upload_npwp_usaha" placeholder="Upload Npwp Usaha">
							</div>
							<div class="mb-3">
								<label for="npwp_pemilik" class="form-label">Npwp Pemilik</label>
								<input type="text" class="form-control" name="npwp_pemilik" id="npwp_pemilik" placeholder="Npwp Pemilik">
							</div>
							<div class="mb-3">
								<label for="bpom" class="form-label">BPOM</label>
								<input type="text" class="form-control" name="bpom" id="bpom" placeholder="bpom">
							</div>
							<div class="mb-3">
								<label for="sertifikat_halal" class="form-label">Sertifikat Halal</label>
								<input type="text" class="form-control" name="sertifikat_halal" id="sertifikat_halal" placeholder="Sertifikat Halal">
							</div>
							<div class="mb-3">
								<label for="pinjaman_bank" class="form-label">Pinjaman Bank</label>
								<input type="text" class="form-control" name="pinjaman_bank" id="pinjaman_bank" placeholder="Pinjaman Bank">
							</div>
							<div class="mb-3">
								<label for="pinjaman_perorangan" class="form-label">Pinjaman Perorangan</label>
								<input type="text" class="form-control" name="pinjaman_perorangan" id="pinjaman_perorangan" placeholder="Pinjaman Perorangan">
							</div>
							<div class="mb-3">
								<label for="pinjaman_koperasi" class="form-label">Pinjaman Koperasi</label>
								<input type="text" class="form-control" name="pinjaman_koperasi" id="pinjaman_koperasi" placeholder="Pinjaman Koperasi">
							</div>
							<div class="mb-3">
								<label for="bantuan_pemerintah" class="form-label">Bantuan Pemerintah</label>
								<input type="text" class="form-control" name="bantuan_pemerintah" id="bantuan_pemerintah" placeholder="Bantuan Pemerintah">
							</div>
							<div class="mb-3">
								<label for="modal_luar" class="form-label">Modal Luar</label>
								<input type="text" class="form-control" name="modal_luar" id="modal_luar" placeholder="Modal Luar">
							</div>
							<div class="mb-3">
								<label for="npwpd_usaha" class="form-label">NPWPD Usaha</label>
								<input type="text" class="form-control" name="npwpd_usaha" id="npwpd_usaha" placeholder="NPWPD Usaha">
							</div>
							<div class="mb-3">
								<label for="npwp_usaha" class="form-label">NPWP Usaha</label>
								<input type="text" class="form-control" name="npwp_usaha" id="npwp_usaha" placeholder="NPWP Usaha">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div id="verifikasi" class="tab-contents">
						<h2>Tab 4</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
					</div>
					<div id="tab05" class="tab-contents">
						<h2>Tab 5</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>