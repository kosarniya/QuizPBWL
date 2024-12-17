

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Daftar Golongan</h3>
    <a href="<?php echo e(route('golongan.create')); ?>" class="btn btn-primary mb-3">Tambah Golongan</a>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($golongan->gol_kode); ?></td>
                <td><?php echo e($golongan->gol_nama); ?></td>
                <td>
                    <a href="<?php echo e(route('golongan.edit', $golongan->gol_id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('golongan.destroy', $golongan->gol_id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBWLkautsar\resources\views/golongan/index.blade.php ENDPATH**/ ?>