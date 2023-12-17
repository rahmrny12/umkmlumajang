<div class="row justify-content-center">
    <div class="col mt-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Nama Customer</th>
                                <th>Total Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($pembayaran as $data): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['no_transaksi'] ?></td>
                                    <td><?= $data['name'] ?></td>
                                    <td><?= 'Rp.' . number_format($data['total_transaksi'], '0', ',', '.') ?></td>
                                    <td><a class="btn btn-primary btn-sm" href="<?= base_url() ?>admin/detail_transaksi/<?= $data['id'] ?>">Detail Transaksi</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>