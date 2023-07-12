<div class="container mt-4">
    <h4><?php echo e($pageTitle); ?></h4>
    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3
    border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <blockquote class="blockquote text-center">
            <p class="mb-0">Selamat datang di halaman <strong><?php echo e($pageTitle); ?></strong></p>
            <br>
            <footer class="blockquote-footer">User <cite title="Source Title"><strong><?php echo e(Auth::user()->name); ?><strong></cite></footer>
        </blockquote>
        <div class="card-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\rosi\modul09\resources\views/default.blade.php ENDPATH**/ ?>