

<?php $__env->startSection('content'); ?>
<h1>Dashboard Admin</h1>

<div class="card p-3">
    <p>Selamat datang, <b><?php echo e(auth()->user()->email); ?></b></p>

    <a href="/admin/secret" class="btn btn-danger mt-3">
        Halaman Rahasia
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>