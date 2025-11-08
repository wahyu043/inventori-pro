<?= $this->include('layouts/header'); ?>

<div class="container mt-4">
    <h2>Edit Barang Masuk</h2>
    <form action="/barang-masuk/update/<?= $barang['id']; ?>" method="post">
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="<?= esc($barang['kode_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?= esc($barang['nama_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="<?= esc($barang['jumlah']); ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="<?= esc($barang['tanggal_masuk']); ?>" required>
        </div>
        <div class="form-group">
            <label>No Faktur</label>
            <input type="text" name="no_faktur" class="form-control" value="<?= esc($barang['no_faktur']); ?>">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= esc($barang['stok']); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/barang-masuk" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('layouts/footer'); ?>