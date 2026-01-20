<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 40px;">Dashboard Admin</h1>

    <!-- Stats Cards -->
    <div class="dashboard-stats">
        <div class="stat-card">
            <h3>Total Ekstrakurikuler</h3>
            <p><?php echo e($totalEkskul); ?></p>
        </div>
        <div class="stat-card">
            <h3>Total Pendaftar</h3>
            <p style="color: #48bb78;"><?php echo e($totalPendaftar); ?></p>
        </div>
        <div class="stat-card">
            <h3>Menunggu Approval</h3>
            <p style="color: #ed8936;"><?php echo e($pendingApproval); ?></p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 40px;">
        <a href="<?php echo e(route('admin.ekstrakurikuler.index')); ?>" class="card" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #667eea;">Kelola Ekstrakurikuler</h3>
                <p style="color: #718096;">Tambah, edit, atau hapus data ekstrakurikuler</p>
            </div>
        </a>
        <a href="<?php echo e(route('admin.pendaftaran.index')); ?>" class="card" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #48bb78;">Kelola Pendaftaran</h3>
                <p style="color: #718096;">Setujui atau tolak pendaftaran siswa</p>
            </div>
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/dashboard/admin.blade.php ENDPATH**/ ?>