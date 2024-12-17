

<?php $__env->startSection('content'); ?>
    <h1>Daftar Pelanggan</h1>
    
    <!-- Tampilkan pesan sukses jika ada -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('pelanggan.create')); ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>No Pelanggan</th>
                <th>Nama</th>
                <th>Golongan</th>
                <th>Seri</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>No KTP</th>
                <th>Meteran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($pelanggan->pel_no); ?></td>
                    <td><?php echo e($pelanggan->pel_nama); ?></td>
                    <td><?php echo e($pelanggan->golongan->gol_nama); ?></td>
                    <td><?php echo e($pelanggan->pel_seri); ?></td>
                    <td><?php echo e($pelanggan->pel_aktif == 'Y' ? 'Aktif' : 'Non-Aktif'); ?></td>
                    <td><?php echo e($pelanggan->pel_alamat); ?></td>
                    <td><?php echo e($pelanggan->pel_hp); ?></td>
                    <td><?php echo e($pelanggan->pel_ktp); ?></td>
                    <td><?php echo e($pelanggan->pel_meteran); ?></td>
                    <td>
                        <a href="<?php echo e(route('pelanggan.edit', $pelanggan->pel_id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('pelanggan.destroy', $pelanggan->pel_id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas2\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>