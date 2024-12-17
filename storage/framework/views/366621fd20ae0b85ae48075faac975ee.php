

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Edit User</h3>
    <form action="<?php echo e(route('users.update', $users->user_id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="user_email" class="form-control" value="<?php echo e($users->user_email); ?>" required>
        </div>
        <div class="mb-3">
            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="user_password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="user_nama" class="form-control" value="<?php echo e($users->user_nama); ?>" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="user_alamat" class="form-control" rows="3" required><?php echo e($users->user_alamat); ?></textarea>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="user_hp" class="form-control" value="<?php echo e($users->user_hp); ?>" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="user_role" class="form-control" required>
                <option value="1" <?php echo e($users->user_role == 1 ? 'selected' : ''); ?>>Admin</option>
                <option value="2" <?php echo e($users->user_role == 2 ? 'selected' : ''); ?>>User</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="user_aktif" class="form-control" required>
                <option value="Y" <?php echo e($users->user_aktif == 'Y' ? 'selected' : ''); ?>>Aktif</option>
                <option value="N" <?php echo e($users->user_aktif == 'N' ? 'selected' : ''); ?>>Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pertemuan12\resources\views/users/edit.blade.php ENDPATH**/ ?>