<?php $__env->startSection('content'); ?>
<h1>Halaman Utama</h1>

<?php if(auth()->guard()->check()): ?>
    <p>Login sebagai <?php echo e(auth()->user()->email); ?></p>
<?php else: ?>
    <p>Silakan login untuk melanjutkan</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/welcome.blade.php ENDPATH**/ ?>