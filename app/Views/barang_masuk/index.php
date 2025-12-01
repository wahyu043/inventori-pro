<?= $this->include('layouts/header'); ?>

<div class="container mt-4">
    <h2>Data Barang Masuk</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="/barang-masuk/create" class="btn btn-primary mb-3">+ Tambah Data</a>
    </div>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>No Faktur</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $row): ?>
                <tr>
                    <td><?= esc($row['kode_barang']); ?></td>
                    <td><?= esc($row['nama_barang']); ?></td>
                    <td><?= esc($row['jumlah']); ?></td>
                    <td><?= esc($row['tanggal_masuk']); ?></td>
                    <td><?= esc($row['no_faktur']); ?></td>
                    <td><?= $stokMap[$row['kode_barang']] ?? 0 ?></td>
                    <td>
                        <a href="/barang-masuk/edit/<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/barang-masuk/delete/<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('layouts/footer'); ?>