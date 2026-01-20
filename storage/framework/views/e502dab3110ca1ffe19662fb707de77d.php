<?php $__env->startSection('title', $ekskul->nama); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 50px 0;">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="card">
            <?php if($ekskul->gambar): ?>
            <img src="<?php echo e(asset('storage/' . $ekskul->gambar)); ?>" alt="<?php echo e($ekskul->nama); ?>" style="width: 100%; height: 400px; object-fit: cover;">
            <?php else: ?>
            <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 120px; font-weight: bold;">
                <?php echo e(substr($ekskul->nama, 0, 1)); ?>

            </div>
            <?php endif; ?>

            <div class="card-body" style="padding: 40px;">
                <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 25px; color: #2d3748;"><?php echo e($ekskul->nama); ?></h1>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Pembina</h3>
                        <p style="color: #718096;"><?php echo e($ekskul->pembina); ?></p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Jadwal</h3>
                        <p style="color: #718096;"><?php echo e($ekskul->jadwal); ?></p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Tempat</h3>
                        <p style="color: #718096;"><?php echo e($ekskul->tempat); ?></p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Kuota Tersedia</h3>
                        <p style="color: #718096;"><?php echo e($ekskul->sisaTempat()); ?> dari <?php echo e($ekskul->kuota); ?> tempat</p>
                    </div>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Deskripsi</h3>
                    <p style="color: #718096; line-height: 1.8;"><?php echo e($ekskul->deskripsi); ?></p>
                </div>

                <div style="display: flex; gap: 15px;">
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">
                        Kembali
                    </a>

                    <?php if(auth()->guard()->check()): ?>
                        <?php if($ekskul->sisaTempat() > 0): ?>
                        <a href="<?php echo e(route('pendaftaran.create', $ekskul->id)); ?>" class="btn btn-primary">
                            Daftar Sekarang
                        </a>
                        <?php else: ?>
                        <button disabled class="btn btn-secondary" style="cursor: not-allowed; opacity: 0.6;">
                            Kuota Penuh
                        </button>
                        <?php endif; ?>
                    <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">
                        Login untuk Mendaftar
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/detail.blade.php ENDPATH**/ ?>