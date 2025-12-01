<?= $this->include('layouts/header'); ?>


<div class="container py-5" max-width:900px;">

    <h3>Laporan Transaksi</h3>

    <!-- FILTER PILIHAN -->
    <form class="mb-5" method="get" action="/laporan/filter">
        <label>Pilih Jenis Laporan:</label>

        <select name="tipe"
            class="form-control form-control-sm w-auto d-inline-block"
            onchange="this.form.submit()">

            <option value="">-- Pilih Filter --</option>
            <option value="harian">Harian</option>
            <option value="mingguan">Mingguan</option>
            <option value="bulanan">Bulanan</option>
        </select>
    </form>


    <?php if (isset($tipe)): ?>

        <!-- FORM ADDITIONAL -->
        <?php if ($tipe == 'harian'): ?>
            <form method="get" action="/laporan/filter" class="mt-3">
                <input type="hidden" name="tipe" value="harian">

                <input type="date"
                    name="tanggal"
                    class="form-control form-control-sm w-auto d-inline-block"
                    required>

                <button class="btn btn-primary btn-sm">Tampilkan</button>
            </form>

        <?php elseif ($tipe == 'mingguan'): ?>
            <form method="get" action="/laporan/filter" class="mt-3">
                <input type="hidden" name="tipe" value="mingguan">

                <input type="number"
                    name="minggu"
                    placeholder="Pekan ke..."
                    class="form-control form-control-sm w-auto d-inline-block mb-1"
                    required>

                <input type="number"
                    name="tahun"
                    placeholder="Tahun"
                    class="form-control form-control-sm w-auto d-inline-block mb-1"
                    required>

                <button class="btn btn-primary btn-sm">Tampilkan</button>
            </form>

        <?php elseif ($tipe == 'bulanan'): ?>
            <form method="get" action="/laporan/filter" class="mt-3">
                <input type="hidden" name="tipe" value="bulanan">

                <select name="bulan"
                    class="form-control form-control-sm w-auto d-inline-block mb-1">
                    <?php for ($b = 1; $b <= 12; $b++): ?>
                        <option value="<?= sprintf('%02d', $b) ?>">
                            <?= date("F", mktime(0, 0, 0, $b, 1)) ?>
                        </option>
                    <?php endfor; ?>
                </select>

                <input type="number"
                    name="tahun"
                    placeholder="Tahun"
                    class="form-control form-control-sm w-auto d-inline-block mb-1"
                    required>

                <button class="btn btn-primary btn-sm">Tampilkan</button>
            </form>
        <?php endif; ?>

    <?php endif; ?>


    <!-- HASIL LAPORAN -->
    <?php if (isset($masuk)): ?>

        <h5 class="mt-4">
            Hasil Laporan (<?= $tipe ?>):
            <span class="text-primary"><?= $tanggal ?></span>
        </h5>


        <!-- Tombol Cetak PDF -->
        <a class="btn btn-danger btn-sm my-3"
            href="/laporan/pdf?tipe=<?= $tipe ?>&tanggal=<?= $tanggal ?>&m=<?= urlencode(json_encode($masuk)) ?>&k=<?= urlencode(json_encode($keluar)) ?>"
            style="width: 180px;">
            Cetak PDF
        </a>


        <!-- TABEL MASUK -->
        <h5 class="mt-4">Barang Masuk</h5>
        <table class="table table-sm table-bordered mt-2">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 100px;">Kode</th>
                    <th>Nama</th>
                    <th style="width: 80px;">Jumlah</th>
                    <th style="width: 140px;">Tanggal</th>
                    <th style="width: 140px;">No Faktur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($masuk as $d): ?>
                    <tr>
                        <td><?= $d['kode_barang'] ?></td>
                        <td><?= $d['nama_barang'] ?></td>
                        <td class="text-right"><?= $d['jumlah'] ?></td>
                        <td><?= $d['tanggal_masuk'] ?></td>
                        <td><?= $d['no_faktur'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <!-- TABEL KELUAR -->
        <h5 class="mt-4">Barang Keluar</h5>
        <table class="table table-sm table-bordered mt-2">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 100px;">Kode</th>
                    <th>Nama</th>
                    <th style="width: 80px;">Jumlah</th>
                    <th style="width: 140px;">Tanggal</th>
                    <th style="width: 140px;">No Faktur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($keluar as $d): ?>
                    <tr>
                        <td><?= $d['kode_barang'] ?></td>
                        <td><?= $d['nama_barang'] ?></td>
                        <td class="text-right"><?= $d['jumlah'] ?></td>
                        <td><?= $d['tanggal_keluar'] ?></td>
                        <td><?= $d['no_faktur'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<div style="height: 50px;"></div>


<?= $this->include('layouts/footer'); ?>