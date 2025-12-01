<?= $this->include('layouts/header'); ?>

<div class="container mt-4">

    <h2>Selamat Datang, <?= esc($name); ?>!</h2>
    <p class="text-muted">Anda login sebagai <strong><?= esc($role); ?></strong>.</p>

    <!-- Tombol Aksi di Atas -->
    <!-- <div class="mb-4">
        <a href="/barang" class="btn btn-secondary">Kelola Data Barang</a>
        <a href="/barang-masuk" class="btn btn-primary">Kelola Barang Masuk</a>
        <a href="/barang-keluar" class="btn btn-success">Kelola Barang Keluar</a>
        <a href="/transaksi" class="btn btn-dark">Data Transaksi</a>
        <a href="/laporan" class="btn btn-info">Laporan Transaksi</a>
    </div> -->

    <!-- Card Statistik -->
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Barang</h5>
                    <h3><?= $totalBarang; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Barang Masuk</h5>
                    <h3><?= $totalMasuk; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Barang Keluar</h5>
                    <h3><?= $totalKeluar; ?></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Data Barang (Master) -->
    <div class="mt-4">
        <h4>Stok Barang Terkini</h4>
        <p class="text-muted">Berikut ini ringkasan stok barang terbaru dari master barang.</p>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->include('layouts/footer'); ?>