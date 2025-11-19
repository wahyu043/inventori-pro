<?= $this->include('layouts/header'); ?>

<div class="container mt-5">
    <h2>Data Barang Keluar</h2>

    <div class="d-flex justify-content-between mb-3">
        <a href="/dashboard" class="btn btn-secondary">← Kembali ke Dashboard</a>
        <a href="/barang-keluar/create" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Keluar</th>
                <th>No Faktur</th>
                <th>Stok</th>
                <th style="width: 140px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= esc($item['kode_barang']); ?></td>
                        <td><?= esc($item['nama_barang']); ?></td>
                        <td><?= esc($item['jumlah']); ?></td>
                        <td><?= esc($item['tanggal_keluar']); ?></td>
                        <td><?= esc($item['no_faktur']); ?></td>
                        <td><?= $stokMap[$item['kode_barang']] ?? 0 ?></td>
                        <td>
                            <a href="/barang-keluar/edit/<?= $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/barang-keluar/delete/<?= $item['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Belum ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->include('layouts/footer'); ?>