<?php $__env->startSection('title', 'Form Pendaftaran'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding: 40px 0;">
    <div style="max-width: 700px; margin: 0 auto;">
        <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 30px;">Pendaftaran Ekstrakurikuler</h1>

        <div class="card" style="margin-bottom: 30px;">
            <div class="card-body">
                <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 10px;"><?php echo e($ekskul->nama); ?></h2>
                <p style="color: #718096;"><?php echo e($ekskul->deskripsi); ?></p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('pendaftaran.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="ekstrakurikuler_id" value="<?php echo e($ekskul->id); ?>">

                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" value="<?php echo e(auth()->user()->name); ?>" disabled class="form-control" style="background-color: #f7fafc;">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" value="<?php echo e(auth()->user()->email); ?>" disabled class="form-control" style="background-color: #f7fafc;">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" value="<?php echo e(old('kelas')); ?>" placeholder="Contoh: X TKJ 1" required class="form-control">
                        <?php $__errorArgs = ['kelas'];
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

                    <div class="form-group">
                        <label class="form-label">No Telepon</label>
                        <input type="tel" name="no_telepon" value="<?php echo e(old('no_telepon')); ?>" placeholder="08xxxxxxxxxx" required class="form-control">
                        <?php $__errorArgs = ['no_telepon'];
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

                    <div class="form-group">
                        <label class="form-label">Alasan Bergabung</label>
                        <textarea name="alasan" placeholder="Tulis alasan kamu ingin bergabung dengan ekstrakurikuler ini..." required class="form-control"><?php echo e(old('alasan')); ?></textarea>
                        <?php $__errorArgs = ['alasan'];
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

                    <div style="display: flex; gap: 15px;">
                        <a href="<?php echo e(route('ekstrakurikuler.show', $ekskul->id)); ?>" class="btn btn-secondary">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\SMK PGRI 05 JEMBER\Documents\ekskul-smk\resources\views/pendaftaran/create.blade.php ENDPATH**/ ?>