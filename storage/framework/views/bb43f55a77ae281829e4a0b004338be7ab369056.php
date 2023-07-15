

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route("outlet.index")); ?>" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="<?php echo e(route('outlet.update', $data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
            <label for="id" class="form-label">ID Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="<?php echo e($data->id); ?>">
          </div>
        <div class="mb-3">
          <label for="nama_outlet" class="form-label">Nama Outlet</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_outlet" id="nama_outlet" aria-describedby="helpId" placeholder="nama_outlet" value="<?php echo e($data->nama_outlet); ?>">
        </div>
        <div class="mb-3">
            <label for="lokasi_outlet" class="form-label">Lokasi Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_outlet" id="lokasi_outlet" aria-describedby="helpId" placeholder="lokasi_outlet" value="<?php echo e($data->lokasi_outlet); ?>">
        </div>
        <div class="mb-3">
            <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
            <textarea class="form-control" rows="5" name="alamat_outlet"><?php echo e($data->alamat_outlet); ?></textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/outlet/outletedit.blade.php ENDPATH**/ ?>