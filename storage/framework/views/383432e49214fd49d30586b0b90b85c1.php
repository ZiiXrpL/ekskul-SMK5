<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - SMK PGRI 5 Jember</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">SMK PGRI 5 JEMBER</div>
            <div class="navbar-menu">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                    <a href="<?php echo e(route('register')); ?>" class="btn-register">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php if(session('success')): ?>
        <div class="container">
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
        <div class="container">
            <div class="alert alert-error">
                <?php echo e(session('error')); ?>

            </div>
        </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 SMK PGRI 5 Jember. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/layouts/app.blade.php ENDPATH**/ ?>