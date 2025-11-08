<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h2>Halo, <?= esc($name) ?> (<?= esc($role) ?>)</h2>
    <p>Selamat datang di area Dashboard. Ini masih dummy playground untuk Petugas Gudang.</p>
    <a href="<?= base_url('logout'); ?>">Logout</a>

</body>

</html>