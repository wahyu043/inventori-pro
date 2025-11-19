<?= $this->include('layouts/header'); ?>

<div class="container mt-5">
    <h2>Edit Data Barang Keluar</h2>

    <form action="/barang-keluar/update/<?= $item['id']; ?>" method="post" class="mt-4">

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="<?= esc($item['kode_barang']); ?>" required>
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?= esc($item['nama_barang']); ?>" required>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="<?= esc($item['jumlah']); ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" name="tanggal_keluar" class="form-control" value="<?= esc($item['tanggal_keluar']); ?>" required>
        </div>

        <div class="form-group">
            <label>No Faktur</label>
            <input type="text" name="no_faktur" class="form-control" value="<?= esc($item['no_faktur']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/barang-keluar" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?= $this->include('layouts/footer'); ?>