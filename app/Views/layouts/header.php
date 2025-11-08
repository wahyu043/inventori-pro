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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-flex justify-content-between align-items-center px-3">
        <a class="navbar-brand font-weight-bold" href="/">INVENTORI PRO</a>

        <div class="d-flex align-items-center">
            <?php if (session()->get('logged_in')): ?>
                <span class="text-white mr-3">Halo, <?= esc(session()->get('name')); ?>!</span>
                <a href="/logout" class="btn btn-light">Logout</a>
            <?php else: ?>
                <a href="/login" class="btn btn-light">Login</a>
            <?php endif; ?>
        </div>
    </nav>