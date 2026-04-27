

<?php $__env->startSection('content'); ?>
<h1>Dashboard User</h1>

<div class="card p-3">
    <?php if(auth()->guard()->check()): ?>
        <p>Selamat datang, <b><?php echo e(auth()->user()->email); ?></b></p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/user/dashboard.blade.php ENDPATH**/ ?>