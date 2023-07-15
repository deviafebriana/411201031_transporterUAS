

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route("sales.index")); ?>" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="<?php echo e(route('sales.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="id" class="form-label">ID Sales</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="<?php echo e(Session::get('id')); ?>">
          </div>
        <div class="mb-3">
          <label for="nama_sales" class="form-label">Nama Sales</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_sales" id="nama_sales" aria-describedby="helpId" placeholder="nama_sales" value="<?php echo e(Session::get('nama_sales')); ?>">
        </div>
        <div class="mb-3">
            <label for="lokasi_sales" class="form-label">Lokasi Sales</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_sales" id="lokasi_sales" aria-describedby="helpId" placeholder="lokasi_sales" value="<?php echo e(Session::get('lokasi_sales')); ?>">
        </div>
        <div class="mb-3">
            <label for="lokasi_outlet" class="form-label">Lokasi Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_outlet" id="lokasi_outlet" aria-describedby="helpId" placeholder="lokasi_outlet" value="<?php echo e(Session::get('lokasi_outlet')); ?>">
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/sales/salescreate.blade.php ENDPATH**/ ?>