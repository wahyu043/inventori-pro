<?= $this->include('layouts/header'); ?>

<div class="container mt-4">
    <h3>Tambah Barang Baru</h3>

    <form action="/barang/store" method="post">
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Stok Awal</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/barang" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('layouts/footer'); ?>