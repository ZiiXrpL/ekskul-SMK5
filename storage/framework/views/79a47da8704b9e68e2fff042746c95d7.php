<?php $__env->startSection('title', 'Kelola Pendaftaran'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 30px;">Kelola Pendaftaran</h1>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th>Ekstrakurikuler</th>
                    <th>Kelas</th>
                    <th>No Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaftaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <div>
                            <div style="font-weight: 600;"><?php echo e($pendaftaran->user->name); ?></div>
                            <div style="font-size: 14px; color: #718096;"><?php echo e($pendaftaran->user->email); ?></div>
                        </div>
                    </td>
                    <td style="font-size: 14px;"><?php echo e($pendaftaran->ekstrakurikuler->nama); ?></td>
                    <td style="font-size: 14px;"><?php echo e($pendaftaran->kelas); ?></td>
                    <td style="font-size: 14px;"><?php echo e($pendaftaran->no_telepon); ?></td>
                    <td>
                        <?php if($pendaftaran->status === 'pending'): ?>
                        <span class="badge badge-warning">Pending</span>
                        <?php elseif($pendaftaran->status === 'diterima'): ?>
                        <span class="badge badge-success">Diterima</span>
                        <?php else: ?>
                        <span class="badge badge-danger">Ditolak</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($pendaftaran->status === 'pending'): ?>
                        <div class="table-actions">
                            <form action="<?php echo e(route('admin.pendaftaran.approve', $pendaftaran->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-success" style="font-size: 14px; padding: 6px 15px;">Terima</button>
                            </form>
                            <form action="<?php echo e(route('admin.pendaftaran.reject', $pendaftaran->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" style="font-size: 14px; padding: 6px 15px;">Tolak</button>
                            </form>
                        </div>
                        <?php else: ?>
                        <span style="color: #cbd5e0;">-</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px; color: #718096;">Belum ada pendaftaran</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($pendaftarans->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/admin/pendaftaran/index.blade.php ENDPATH**/ ?>