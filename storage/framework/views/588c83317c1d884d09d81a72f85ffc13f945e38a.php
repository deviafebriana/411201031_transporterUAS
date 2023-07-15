

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route("transaksi.index")); ?>" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="<?php echo e(route('transaksi.update', $data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
            <label for="id" class="form-label">ID Transaksi</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="<?php echo e($data->id); ?>">
          </div>
        <div class="mb-3">
          <label for="nama_sales" class="form-label">Nama Sales</label>
          <input type="text"
            class="form-control form-control-sm" name="nama_sales" id="nama_sales" aria-describedby="helpId" placeholder="nama_sales" value="<?php echo e($data->nama_sales); ?>">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="nama_barang" id="nama_barang" aria-describedby="helpId" placeholder="nama_barang" value="<?php echo e($data->nama_barang); ?>">
        </div>
        <div class="mb-3">
            <label for="nama_outlet" class="form-label">Nama Outlet</label>
            <input type="text"
              class="form-control form-control-sm" name="nama_outlet" id="nama_outlet" aria-describedby="helpId" placeholder="nama_outlet" value="<?php echo e($data->nama_outlet); ?>">
        </div>
        <div class="mb-3">
            <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
            <input type="text"
              class="form-control form-control-sm" name="jumlah_stok" id="jumlah_stok" aria-describedby="helpId" placeholder="jumlah_stok" value="<?php echo e($data->jumlah_stok); ?>">
        </div>
        <div class="mb-3">
            <label for="jumlah_display" class="form-label">Jumlah Display</label>
            <input type="text"
              class="form-control form-control-sm" name="jumlah_display" id="jumlah_display" aria-describedby="helpId" placeholder="jumlah_display" value="<?php echo e($data->jumlah_display); ?>">
        </div>
        <div class="mb-3">
            <label for="visit_datetime" class="form-label">Time Visit</label>
            <input type="date"
              class="form-control form-control-sm" name="visit_datetime" id="visit_datetime" aria-describedby="helpId" placeholder="visit_datetime" value="<?php echo e($data->visit_datetime); ?>">
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/transaksi/transaksiedit.blade.php ENDPATH**/ ?>