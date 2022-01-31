<div class="container-fluid">

    <?php foreach ($barang as $brg) : ?>

        <form action="http://localhost/toko-online/index.php/data_admin/update_data/<?= $brg['id_brg'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg['id_brg'] ?>">
            </div>

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg['nama_brg'] ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $brg['keterangan'] ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori" value="<?= $brg['kategori'] ?>">
                    <option>Baru</option>
                    <option>Bekas</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg['harga'] ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg['stok'] ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="telepon" class="form-control" value="<?= $brg['telepon'] ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>


            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    <?php endforeach; ?>

</div>