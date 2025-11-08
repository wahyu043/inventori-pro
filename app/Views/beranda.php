<?= $this->include('layouts/header'); ?>

<div class="text-center py-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success w-50 mx-auto">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="text-center py-5">
        <h1 class="display-4 text-primary mb-3">Selamat datang di INVENTORI PRO</h1>
        <p class="lead text-secondary">Aplikasi Cek Stok Barang Opname</p>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>