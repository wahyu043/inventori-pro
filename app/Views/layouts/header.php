<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Inventori Pro'); ?></title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        footer {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="/">INVENTORI PRO</a>
            <a class="btn btn-light" href="<?= base_url('login'); ?>">Login</a>
        </div>
    </nav>