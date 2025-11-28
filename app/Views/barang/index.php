<?= $this->include('layouts/header'); ?>

<div class="container mt-4">
    <h3>Data Barang (Master)</h3>
    <a href="/dashboard" class="btn btn-secondary mb-3">← Kembali ke Dashboard</a>
    <a href="/barang/create" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($items as $row): ?>
                <tr>
                    <td><?= $row['kode_barang']; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['satuan']; ?></td>
                    <td><?= number_format($row['harga_beli']); ?></td>
                    <td><?= number_format($row['harga_jual']); ?></td>
                    <td><strong><?= $row['stok']; ?></strong></td>
                    <td>
                        <a href="/barang/edit/<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/barang/delete/<?= $row['id']; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus barang ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('layouts/footer'); ?>