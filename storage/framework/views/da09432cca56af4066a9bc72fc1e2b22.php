<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Ekstrakurikuler SMK PGRI 5 Jember</h1>
        <p>Kembangkan Bakat dan Minatmu Bersama Kami!</p>
        <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary" style="font-size: 18px; padding: 15px 40px;">
            Daftar Sekarang
        </a>
        <?php endif; ?>
    </div>
</div>

<!-- Ekstrakurikuler List -->
<div class="container">
    <div class="section-header">
        <h2 class="section-title">Daftar Ekstrakurikuler</h2>
    </div>

    <div class="card-grid">
        <?php $__empty_1 = true; $__currentLoopData = $ekstrakurikulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card">
            <?php if($ekskul->gambar): ?>
            <img src="<?php echo e(asset('storage/' . $ekskul->gambar)); ?>" alt="<?php echo e($ekskul->nama); ?>" class="card-image">
            <?php else: ?>
            <div class="card-image-placeholder">
                <?php echo e(substr($ekskul->nama, 0, 1)); ?>

            </div>
            <?php endif; ?>

            <div class="card-body">
                <h3 class="card-title"><?php echo e($ekskul->nama); ?></h3>
                <p class="card-text"><?php echo e($ekskul->deskripsi); ?></p>

                <div style="margin: 15px 0;">
                    <div class="card-info"><strong>Pembina:</strong> <?php echo e($ekskul->pembina); ?></div>
                    <div class="card-info"><strong>Jadwal:</strong> <?php echo e($ekskul->jadwal); ?></div>
                    <div class="card-info"><strong>Kuota:</strong> <?php echo e($ekskul->sisaTempat()); ?>/<?php echo e($ekskul->kuota); ?> tersisa</div>
                </div>

                <a href="<?php echo e(route('ekstrakurikuler.show', $ekskul->id)); ?>" class="btn btn-primary btn-block">
                    Lihat Detail
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px 0;">
            <p style="font-size: 18px; color: #718096;">Belum ada ekstrakurikuler tersedia.</p>
        </div>
        <?php endif; ?>
    </div>

    <div class="mt-4 text-center">
        <?php echo e($ekstrakurikulers->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/home.blade.php ENDPATH**/ ?>