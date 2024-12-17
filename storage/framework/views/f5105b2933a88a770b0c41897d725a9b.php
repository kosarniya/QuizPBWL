

<?php $__env->startSection('content'); ?>
    <h1>Tambah Pelanggan</h1>

    <!-- Tampilkan pesan error jika ada -->
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('pelanggan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="pel_id_gol">Golongan</label>
            <select name="pel_id_gol" id="pel_id_gol" class="form-control" required>
                <option value="">Pilih Golongan</option>
                <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($golongan->gol_id); ?>"><?php echo e($golongan->gol_nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="pel_id_user">User</label>
            <select name="pel_id_user" id="pel_id_user" class="form-control" required>
                <option value="">Pilih User</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->user_id); ?>"><?php echo e($user->user_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        </div>

        <div class="form-group">
            <label for="pel_no">No Pelanggan</label>
            <input type="text" class="form-control" id="pel_no" name="pel_no" required>
        </div>

        <div class="form-group">
            <label for="pel_nama">Nama</label>
            <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
        </div>

        <div class="form-group">
            <label for="pel_alamat">Alamat</label>
            <textarea class="form-control" id="pel_alamat" name="pel_alamat" required></textarea>
        </div>

        <div class="form-group">
            <label for="pel_hp">No HP</label>
            <input type="text" class="form-control" id="pel_hp" name="pel_hp">
        </div>

        <div class="form-group">
            <label for="pel_ktp">No KTP</label>
            <input type="text" class="form-control" id="pel_ktp" name="pel_ktp">
        </div>

        <div class="form-group">
            <label for="pel_seri">Seri</label>
            <input type="text" class="form-control" id="pel_seri" name="pel_seri" required>
        </div>

        <div class="form-group">
            <label for="pel_meteran">Meteran</label>
            <input type="number" class="form-control" id="pel_meteran" name="pel_meteran" required>
        </div>

        <div class="form-group">
            <label for="pel_aktif">Aktif</label>
            <select name="pel_aktif" id="pel_aktif" class="form-control">
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas2\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>