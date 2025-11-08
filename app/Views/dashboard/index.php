<?= $this->include('layouts/header'); ?>

<div class="container mt-5">
    <h2>Selamat Datang, <?= esc($name); ?>!</h2>
    <p class="text-muted">Anda login sebagai <strong><?= esc($role); ?></strong>.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Barang</h5>
                    <h3 class="card-text"><?= esc($totalBarang); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Barang Masuk</h5>
                    <h3 class="card-text"><?= esc($totalMasuk); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title">Role Aktif</h5>
                    <h3 class="card-text"><?= esc(ucfirst($role)); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="mt-3">
        <a href="/barang-masuk" class="btn btn-primary">Kelola Barang Masuk</a>
        <a href="/barang" class="btn btn-outline-secondary">Data Barang</a>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>