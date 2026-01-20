<?php $__env->startSection('title', 'Kelola Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 40px 0;">
    <div class="flex-between" style="margin-bottom: 30px;">
        <h1 style="font-size: 36px; font-weight: 700;">Kelola Ekstrakurikuler</h1>
        <a href="<?php echo e(route('admin.ekstrakurikuler.create')); ?>" class="btn btn-primary">
            Tambah Ekstrakurikuler
        </a>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pembina</th>
                    <th>Jadwal</th>
                    <th>Kuota</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $ekstrakurikulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <?php if($ekskul->gambar): ?>
                           <img src="<?php echo e(asset('storage/' . $ekskul->gambar)); ?>" alt="<?php echo e($ekskul->nama); ?>" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                            <?php endif; ?>
                            <span style="font-weight: 600;"><?php echo e($ekskul->nama); ?></span>
                        </div>
                    </td>
                    <td style="color: #718096;"><?php echo e($ekskul->pembina); ?></td>
                    <td style="color: #718096; font-size: 14px;"><?php echo e($ekskul->jadwal); ?></td>
                    <td style="color: #718096;"><?php echo e($ekskul->sisaTempat()); ?>/<?php echo e($ekskul->kuota); ?></td>
                    <td>
                        <?php if($ekskul->status): ?>
                        <span class="badge badge-success">Aktif</span>
                        <?php else: ?>
                        <span class="badge badge-danger">Nonaktif</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="<?php echo e(route('admin.ekstrakurikuler.edit', $ekskul->id)); ?>" class="btn btn-primary" style="font-size: 14px; padding: 6px 15px;">Edit</a>
                            <form action="<?php echo e(route('admin.ekstrakurikuler.destroy', $ekskul->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger" style="font-size: 14px; padding: 6px 15px;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px; color: #718096;">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($ekstrakurikulers->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/admin/ekstrakurikuler/index.blade.php ENDPATH**/ ?>