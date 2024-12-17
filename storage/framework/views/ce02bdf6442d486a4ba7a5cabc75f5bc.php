

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Edit Golongan</h3>
    <form action="<?php echo e(route('golongan.update', $golongan->gol_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="gol_kode" class="form-label">Kode Golongan</label>
            <input type="text" class="form-control" id="gol_kode" name="gol_kode" value="<?php echo e($golongan->gol_kode); ?>" required>
        </div>
        <div class="mb-3">
            <label for="gol_nama" class="form-label">Nama Golongan</label>
            <input type="text" class="form-control" id="gol_nama" name="gol_nama" value="<?php echo e($golongan->gol_nama); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pertemuan12\resources\views/golongan/edit.blade.php ENDPATH**/ ?>