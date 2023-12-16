<div class="row justify-content-center">
  <div class="col-sm-10 mt-5">
    <div class="card shadow">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addpoduk">
        Tambah Produk
      </button>
      <div class="card-body">
        <form action="<?= base_url(); ?>user/add_produk" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="hidden" class="form-control" id="id">
          </div>
          <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="" required>
          </div>
          <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Jumlah Barang</label>
            <input type="text" class="form-control" id="stok" name="stok" value="">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">WhatsApp</label>
            <input type="text" class="form-control" id="wa" name="wa" value="">
          </div>
          <div class="mb-3">
            <label for="foto_barang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto_barang" name="foto_barang_1">
          </div>
          <div class="mb-3">
            <label for="foto_barang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto_barang" name="foto_barang_2">
          </div>
          <div class="mb-3">
            <label for="foto_barang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto_barang" name="foto_barang_3">
          </div>
          <div class="mb-3">
            <label for="foto_barang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto_barang" name="foto_barang_4">
          </div>
          <div class="mb-3">
            <label for="foto_barang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto_barang" name="foto_barang_5">
          </div>
          <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addpoduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>