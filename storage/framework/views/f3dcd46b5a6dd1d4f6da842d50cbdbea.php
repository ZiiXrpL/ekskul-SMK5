<?php $__env->startSection('title', 'Dashboard Siswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 40px;">Dashboard Siswa</h1>

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #e2e8f0;">
                Riwayat Pendaftaran
            </h2>

            <?php $__empty_1 = true; $__currentLoopData = $pendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div style="border: 2px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 15px;">
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; color: #2d3748; margin-bottom: 10px;">
                            <?php echo e($pendaftaran->ekstrakurikuler->nama); ?>

                        </h3>
                        <p style="color: #718096; margin-bottom: 5px;"><strong>Kelas:</strong> <?php echo e($pendaftaran->kelas); ?></p>
                        <p style="color: #718096;"><strong>Tanggal Daftar:</strong> <?php echo e($pendaftaran->created_at->format('d M Y')); ?></p>
                    </div>
                    <div>
                        <?php if($pendaftaran->status === 'pending'): ?>
                        <span class="badge badge-warning">Pending</span>
                        <?php elseif($pendaftaran->status === 'diterima'): ?>
                        <span class="badge badge-success">Diterima</span>
                        <?php else: ?>
                        <span class="badge badge-danger">Ditolak</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p style="text-align: center; color: #718096; padding: 40px 0; font-size: 18px;">
                Belum ada pendaftaran.
            </p>
            <?php endif; ?>
        </div>
    </div>

    <div class="mt-4">
        <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">
            Daftar Ekstrakurikuler Baru
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/dashboard/user.blade.php ENDPATH**/ ?>