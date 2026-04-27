<?php $__env->startSection('content'); ?>
<h1>Login</h1>

<div class="card p-4">
    
    <form method="POST" action="/login">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </form>

    <!-- TOMBOL TAMBAHAN -->
    <a href="/" class="btn btn-secondary mt-3">
        Kembali ke Halaman Utama
    </a>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/auth/login.blade.php ENDPATH**/ ?>