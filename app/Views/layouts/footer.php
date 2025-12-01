<?php if (session()->get('logged_in')): ?>
    <?= $this->include('layouts/footer_private'); ?>
<?php else: ?>
    <?= $this->include('layouts/footer_public'); ?>
<?php endif; ?>



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>