<?= $this->include('layouts/header'); ?>

<main class="content-wrapper p-4">

    <h3 class="mb-4">Data Transaksi (History)</h3>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Jenis</th>
                    <th>Petugas</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; foreach ($transaksi as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['kode_barang']; ?></td>
                        <td><?= $row['nama_barang']; ?></td>
                        <td><?= $row['jumlah']; ?></td>
                        <td>
                            <?php if ($row['jenis'] == 'Masuk'): ?>
                                <span class="badge badge-success">Masuk</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Keluar</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $row['user']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</main>

<?= $this->include('layouts/footer'); ?>
