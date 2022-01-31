<div class="container-fluid">

  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah Barang</button>

  <table class="table mt-2">
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>

      <th>Keterangan</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Telepon</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <?php $count = 0; ?>
    <?php foreach ($barang as $brg) : ?>
      <?php $count++; ?>
      <tr>
        <th><?= $count ?></th>

        <th><?= $brg->nama_brg ?></th>

        <th><?= $brg->keterangan ?></th>
        <th><?= $brg->kategori  ?></th>
        <th><?= $brg->harga ?></th>
        <th><?= $brg->stok ?></th>
        <th><?= $brg->telepon ?></th>
        <th> <img src="<?= base_url() . 'uploads/' . $brg->gambar ?>" style="width: 10rem;"></th>
        <th>
          <?php echo anchor('data_admin/edit_data/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')
          ?>
        </th>
        <th onClick="javacript : return confirm('hapus?')">
          <?php echo anchor('data_admin/delete/' . $brg->id_brg, ' <div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>')
          ?>
        </th>
        <th>
          <?php echo anchor('data_admin/edit_data/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')
          ?>
        </th>
      </tr>

    <?php endforeach; ?>

  </table>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="insert_data" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>Bekas</option>
              <option>Baru</option>
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
          </div>

          <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="telepon" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

</div>

</div>