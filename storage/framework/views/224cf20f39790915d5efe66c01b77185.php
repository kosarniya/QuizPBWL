

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Daftar Users</h3>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">Tambah User</a>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Role</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($user->user_email); ?></td>
                <td><?php echo e($user->user_nama); ?></td>
                <td><?php echo e($user->user_alamat); ?></td>
                <td><?php echo e($user->user_hp); ?></td>
                <td><?php echo e($user->user_role == 1 ? 'Admin' : 'User'); ?></td>
                <td><?php echo e($user->user_aktif == 'Y' ? 'Aktif' : 'Tidak Aktif'); ?></td>
                <td>
                    <a href="<?php echo e(route('users.edit', $user->user_id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('users.destroy', $user->user_id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PBWLkautsar\resources\views/users/index.blade.php ENDPATH**/ ?>