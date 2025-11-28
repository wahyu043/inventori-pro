<?= $this->include('layouts/header'); ?>

<div class="container mt-4">
    <h3>Edit Barang</h3>

    <form action="/barang/update/<?= $item['id']; ?>" method="post">

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= $item['nama_barang']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" value="<?= $item['satuan']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" value="<?= $item['harga_beli']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" value="<?= $item['harga_jual']; ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/barang" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('layouts/footer'); ?>