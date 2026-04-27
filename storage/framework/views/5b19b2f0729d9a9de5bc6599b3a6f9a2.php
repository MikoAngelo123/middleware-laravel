<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Middleware Praktik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Middleware App</a>

        <div class="navbar-nav ms-auto">
            <?php if(auth()->guard()->check()): ?>
                <span class="navbar-text me-3 text-white">
                    <?php echo e(auth()->user()->email); ?>

                </span>

                <a class="nav-link" href="<?php echo e(auth()->user()->role == 'admin' ? '/admin' : '/user'); ?>">
                    Dashboard
                </a>

                <a class="nav-link" href="/logout">Logout</a>
            <?php else: ?>
                <a class="nav-link" href="/login">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container mt-4">

    
    <?php if(session('error')): ?>
        <div class="alert alert-danger text-center">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/layouts/app.blade.php ENDPATH**/ ?>