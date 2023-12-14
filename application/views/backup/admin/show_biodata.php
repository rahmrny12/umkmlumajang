<div class="row justify-content-center">
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
				<h4>Data Diri Pemilik Perusahaan</h4>
				<h6 class="text-secondary">Data Personal</h6>
				<hr>
				<?php if($data_diri): ?>
					<ul class="list-group">
						<li class="list-group-item">Nama Pemilik : <?= $data_diri['nama_pemilik'] ?></li>
						<li class="list-group-item">NIK : <?= $data_diri['nik'] ?></li>
						<li class="list-group-item">KK : <?= $data_diri['no_kk'] ?></li>
						<li class="list-group-item">Jenis Kelamin : <?= $data_diri['jenis_kelamin'] ?></li>
						<li class="list-group-item">Status Menikah : <?= $data_diri['status_nikah'] ?></li>
						<li class="list-group-item">Tempat Lahir : <?= $data_diri['tmp_lahir'] ?></li>
						<li class="list-group-item">Tanggal Lahir : <?= $data_diri['tgl_lahir'] ?></li>
						<li class="list-group-item">Alamat KTP : <?= $data_diri['alamat_ktp'] ?></li>
						<li class="list-group-item">Provinsi : <?= $data_diri['provinsi'] ?></li>
						<li class="list-group-item">Kota : <?= $data_diri['kota'] ?></li>
						<li class="list-group-item">Kecamatan : <?= $data_diri['kecamatan'] ?></li>
						<li class="list-group-item">Kelurahan : <?= $data_diri['kelurahan'] ?></li>
						<li class="list-group-item">Alamat Domisili : <?= $data_diri['alamat_domisili'] ?></li>
						<li class="list-group-item">Kode Pos : <?= $data_diri['kode_pos'] ?></li>
						<li class="list-group-item">WA : <?= $data_diri['wa'] ?></li>
						<li class="list-group-item">Nomor Hp : <?= $data_diri['no_hp'] ?></li>
						<li class="list-group-item">Email : <?= $data_diri['email'] ?></li>
						<li class="list-group-item">Foto Ktp : </li>
						<?php if (isset($data_diri['ktp'])): ?>
							<li class="list-group-item">
								<img class="col-3" src="<?= base_url() ?>assets/uploads/<?= $data_diri['ktp']?>" alt="<?= $data_diri['ktp']?>">
							</li>
						<?php endif; ?>
						<li class="list-group-item">Foto KK : </li>
						<?php if (isset($data_diri['ktp'])): ?>
							<li class="list-group-item">
								<img class="col-3" src="<?= base_url() ?>assets/uploads/<?= $data_diri['ktp']?>" alt="<?= $data_diri['ktp']?>">
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>

				<?php if($data_umkm): ?>
					<h4 class="mt-3">Data UMKM</h4>
					<h6 class="text-secondary">Data Tambahan Umum</h6>
					<hr>
					<ul class="list-group">
						<li class="list-group-item">Nama UMKM : <?= $data_umkm['nama_umkm'] ?></li>
						<li class="list-group-item">NIB : <?= $data_umkm['nib'] ?></li>
						<li class="list-group-item">Sektor Usaha : <?= $data_umkm['sektor_usaha'] ?></li>
						<li class="list-group-item">Jenis Usaha : <?= $data_umkm['jenis_usaha'] ?></li>
						<li class="list-group-item">Ekonomi Kreatif: <?= $data_umkm['ekonomi_kreatif'] ?></li>
						<li class="list-group-item">Tanggal Mulai Usaha: <?= $data_umkm['tanggal_mulai_usaha'] ?></li>
						<li class="list-group-item">Provinsi: <?= $data_umkm['provinsi'] ?></li>
						<li class="list-group-item">Kota: <?= $data_umkm['kota'] ?></li>
						<li class="list-group-item">Kecamatan: <?= $data_umkm['kecamatan'] ?></li>
						<li class="list-group-item">Kelurahan: <?= $data_umkm['kelurahan'] ?></li>
						<li class="list-group-item">Alamat Usaha: <?= $data_umkm['alamat_usaha'] ?></li>
						<li class="list-group-item">Kode Pos Usaha: <?= $data_umkm['kode_pos_usaha'] ?></li>
						<li class="list-group-item">Jumlah Tenaga Kerja Laki-Laki: <?= $data_umkm['jumlah_tenaga_kerja_laki_laki'] ?></li>
						<li class="list-group-item">Jumlah Tenaga Kerja Perempuan: <?= $data_umkm['jumlah_tenaga_kerja_perempuan'] ?></li>
						<li class="list-group-item">Jumlah Karyawan Laki-Laki: <?= $data_umkm['jumlah_karyawan_laki_laki'] ?></li>
						<li class="list-group-item">Jumlah Karyawan Perempuan: <?= $data_umkm['jumlah_karyawan_perempuan'] ?></li>
						<li class="list-group-item">Website: <?= $data_umkm['website'] ?></li>
						<li class="list-group-item">Status Tempat Usaha: <?= $data_umkm['status_tempat_usaha'] ?></li>
						<li class="list-group-item">Bentuk Usaha: <?= $data_umkm['bentuk_usaha'] ?></li>
						<li class="list-group-item">Uraian Usaha: <?= $data_umkm['uraian_usaha'] ?></li>
						<li class="list-group-item">Bahan Bakar Utama: <?= $data_umkm['bahan_bakar_utama'] ?></li>
						<li class="list-group-item">Kapasitas Produksi Harian: <?= $data_umkm['kapasitas_produksi_harian'] ?></li>
						<li class="list-group-item">Satuan Produksi: <?= $data_umkm['satuan_produksi'] ?></li>
						<li class="list-group-item">Nominal Aset: <?= $data_umkm['nominal_aset'] ?></li>
						<li class="list-group-item">Modal Sendiri: <?= $data_umkm['modal_sendiri'] ?></li>
						<li class="list-group-item">Foto NIB:</li>
						<?php if (isset($data_umkm['foto_nib'])): ?>
							<li class="list-group-item">
								<img class="col-3" src="<?= base_url() ?>assets/uploads/<?= $data_umkm['foto_nib']?>" alt="<?= $data_umkm['foto_nib']?>">
							</li>
						<?php endif; ?>
						<li class="list-group-item">Foto Produk:</li>
						<?php if (isset($data_umkm['foto_produk'])): ?>
							<li class="list-group-item">
								<img class="col-3" src="<?= base_url() ?>assets/uploads/<?= $data_umkm['foto_produk']?>" alt="<?= $data_umkm['foto_produk']?>">
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
