<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse
        }

        td,
        th {
            border: 1px solid #444;
            padding: 6px;
        }

        th {
            background: #eaeaea;
        }
    </style>
</head>

<body>

    <h2>Laporan Transaksi</h2>
    <p>Tanggal: <?= $tanggal ?></p>

    <h3>Barang Masuk</h3>
    <table>
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>No Faktur</th>
        </tr>
        <?php foreach ($masuk as $m): ?>
            <tr>
                <td><?= $m['kode_barang'] ?></td>
                <td><?= $m['nama_barang'] ?></td>
                <td><?= $m['jumlah'] ?></td>
                <td><?= $m['tanggal_masuk'] ?></td>
                <td><?= $m['no_faktur'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Barang Keluar</h3>
    <table>
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>No Referensi</th>
        </tr>
        <?php foreach ($keluar as $k): ?>
            <tr>
                <td><?= $k['kode_barang'] ?></td>
                <td><?= $k['nama_barang'] ?></td>
                <td><?= $k['jumlah'] ?></td>
                <td><?= $k['tanggal_keluar'] ?></td>
                <td><?= $k['no_faktur'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>