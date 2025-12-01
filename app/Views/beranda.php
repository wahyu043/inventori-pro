<?= $this->include('layouts/header'); ?>

<div class="container mt-5">

    <h1 class="text-primary text-center mb-2">Selamat datang di INVENTORI PRO</h1>
    <p class="text-center text-muted mb-5">Aplikasi Cek Stok Barang Opname</p>

    <!-- Form Login Langsung di Beranda -->
    <div class="row justify-content-center">
        <div class="col-md-4">

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center mb-4">Login Inventori</h4>

                    <form action="/login" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required autofocus>
                        </div>

                        <div class="form-group mt-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">Masuk</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

<?= $this->include('layouts/footer'); ?>