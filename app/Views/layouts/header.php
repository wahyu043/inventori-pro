<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Inventori Pro'); ?></title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-flex justify-content-between align-items-center px-3">
        <a class="navbar-brand font-weight-bold" href="/">INVENTORI PRO</a>

        <div class="d-flex align-items-center">
            <?php if (session()->get('logged_in')): ?>
                <span class="text-white mr-3">Halo, <?= esc(session()->get('name')); ?>!</span>
                <a href="/logout" class="btn btn-light">Logout</a>
            <?php else: ?>
                <a href="/login" class="btn btn-light">Login</a>
            <?php endif; ?>
        </div>
    </nav> -->

    <!-- <nav id="sidebar" class="bg-dark text-white p-3" style="width: 230px; min-height: 100vh; position: fixed;">

        <h4 class="mb-4">Inventori Pro</h4>

        <ul class="list-unstyled">

            <li><a href="/dashboard" class="d-block py-2 text-white">Dashboard</a></li>
            <hr class="bg-secondary">

            <li><a href="/barang" class="d-block py-2 text-white">Data Barang</a></li>
            <li><a href="/barang-masuk" class="d-block py-2 text-white">Barang Masuk</a></li>
            <li><a href="/barang-keluar" class="d-block py-2 text-white">Barang Keluar</a></li>
            <li><a href="/transaksi" class="d-block py-2 text-white">Data Transaksi</a></li>
            <li><a href="/laporan" class="d-block py-2 text-white">Laporan</a></li>

            <hr class="bg-secondary">
            <li><a href="/logout" class="d-block py-2 text-warning">Logout</a></li>
        </ul>

    </nav>

    <div id="content" class="flex-grow-1" style="margin-left: 230px;"> -->

    <body>

<?php if (session()->get('logged_in')): ?>
<div class="d-flex">

    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark text-white p-3" style="width: 230px; min-height: 100vh; position: fixed;">
        <h4 class="mb-4">Inventori Pro</h4>

        <ul class="list-unstyled">
            <li><a href="/dashboard" class="d-block py-2 text-white">Dashboard</a></li>
            <hr class="bg-secondary">
            <li><a href="/barang" class="d-block py-2 text-white">Data Barang</a></li>
            <li><a href="/barang-masuk" class="d-block py-2 text-white">Barang Masuk</a></li>
            <li><a href="/barang-keluar" class="d-block py-2 text-white">Barang Keluar</a></li>
            <li><a href="/transaksi" class="d-block py-2 text-white">Data Transaksi</a></li>
            <li><a href="/laporan" class="d-block py-2 text-white">Laporan</a></li>
            <hr class="bg-secondary">
            <li><a href="/logout" class="d-block py-2 text-warning">Logout</a></li>
        </ul>
    </nav>

    <!-- WRAPPER CONTENT -->
    <div id="content" class="flex-grow-1" style="margin-left: 230px;">

    <main>
<?php endif; ?>
