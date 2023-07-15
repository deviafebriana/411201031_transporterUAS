

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route("pengiriman.index")); ?>" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="<?php echo e(route('pengiriman.update', $data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
            <label for="id" class="form-label">No.Pengiriman</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="<?php echo e($data->id); ?>">
          </div>
        <div class="mb-3">
          <label for="no_pengiriman" class="form-label">No.Transaksi</label>
          <input type="text"
            class="form-control form-control-sm" name="no_pengiriman" id="no_pengiriman" aria-describedby="helpId" placeholder="no_pengiriman" value="<?php echo e($data->no_pengiriman); ?>">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date"
              class="form-control form-control-sm" name="tanggal" id="tanggal" aria-describedby="helpId" placeholder="tanggal" value="<?php echo e($data->tanggal); ?>">
        </div>
        <div class="mb-3">
            <label for="lokasi_id" class="form-label">ID Lokasi</label>
            <input type="text"
              class="form-control form-control-sm" name="lokasi_id" id="lokasi_id" aria-describedby="helpId" placeholder="lokasi_id" value="<?php echo e($data->lokasi_id); ?>">
        </div>
        <div class="mb-3">
            <label for="barang_id" class="form-label">ID Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="barang_id" id="barang_id" aria-describedby="helpId" placeholder="barang_id" value="<?php echo e($data->barang_id); ?>">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="jumlah_barang" id="jumlah_barang" aria-describedby="helpId" placeholder="jumlah_barang" value="<?php echo e($data->jumlah_barang); ?>">
        </div>
        <div class="mb-3">
            <label for="kurir_id" class="form-label">ID Kurir</label>
            <input type="text"
              class="form-control form-control-sm" name="kurir_id" id="kurir_id" aria-describedby="helpId" placeholder="kurir_id" value="<?php echo e($data->kurir_id); ?>">
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/pengiriman/pengirimanedit.blade.php ENDPATH**/ ?>