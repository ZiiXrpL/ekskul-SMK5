<?php $__env->startSection('title', 'Edit Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="form-container">
        <div class="form-card">
            <h1 class="form-title">Edit Ekstrakurikuler</h1>

            <form action="<?php echo e(route('admin.ekstrakurikuler.update', $ekstrakurikuler->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <!-- Nama Ekstrakurikuler -->
                <div class="form-group">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama" value="<?php echo e(old('nama', $ekstrakurikuler->nama)); ?>"
                           class="form-control" required placeholder="Masukkan nama ekskul">
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Deskripsi -->
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required
                              placeholder="Jelaskan detail ekstrakurikuler"><?php echo e(old('deskripsi', $ekstrakurikuler->deskripsi)); ?></textarea>
                    <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Pembina -->
                <div class="form-group">
                    <label class="form-label">Pembina</label>
                    <input type="text" name="pembina" value="<?php echo e(old('pembina', $ekstrakurikuler->pembina)); ?>"
                           class="form-control" required placeholder="Nama pembina">
                    <?php $__errorArgs = ['pembina'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Jadwal -->
                <div class="form-group">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" value="<?php echo e(old('jadwal', $ekstrakurikuler->jadwal)); ?>"
                           class="form-control" required placeholder="Contoh: Senin, 15:00 - 17:00">
                    <?php $__errorArgs = ['jadwal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Tempat -->
                <div class="form-group">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" value="<?php echo e(old('tempat', $ekstrakurikuler->tempat)); ?>"
                           class="form-control" required placeholder="Lokasi kegiatan">
                    <?php $__errorArgs = ['tempat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Gambar -->
                <div class="form-group">
                    <label class="form-label">Gambar (Opsional)</label>
                    <?php if($ekstrakurikuler->gambar): ?>
                        <div style="margin-bottom: 10px;">
                           <img src="<?php echo e(asset('storage/' . $ekstrakurikuler->gambar)); ?>" alt="Current" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px; display: block;">
                            <p style="font-size: 12px; color: #718096;">Gambar saat ini</p>
                        </div>
                    <?php endif; ?>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Kuota -->
                <div class="form-group">
                    <label class="form-label">Kuota</label>
                    <input type="number" name="kuota" value="<?php echo e(old('kuota', $ekstrakurikuler->kuota)); ?>"
                           class="form-control" min="1" required>
                    <?php $__errorArgs = ['kuota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" <?php echo e(old('status', $ekstrakurikuler->status) == '1' ? 'selected' : ''); ?>>Aktif</option>
                        <option value="0" <?php echo e(old('status', $ekstrakurikuler->status) == '0' ? 'selected' : ''); ?>>Nonaktif</option>
                    </select>
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="form-error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Tombol Aksi -->
                <div style="display: flex; gap: 10px; margin-top: 30px;">
                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                    <a href="<?php echo e(route('admin.ekstrakurikuler.index')); ?>" class="btn btn-secondary btn-block" style="text-align: center;">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/admin/ekstrakurikuler/edit.blade.php ENDPATH**/ ?>