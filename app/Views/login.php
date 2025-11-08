<?= $this->include('layouts/header'); ?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow-sm p-4" style="width: 350px;">
        <h4 class="text-center text-primary mb-4">Login Inventori Pro</h4>

        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success'); ?></p>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>


        <form method="post" action="/login">
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </form>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>