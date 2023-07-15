

<?php $__env->startSection('konten'); ?>
    <div class="pb-3"><a href="<?php echo e(route("pengiriman.index")); ?>" class="btn btn-secondary">
        << Back</a>
    </div>
    <form action="<?php echo e(route('pengiriman.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="id" class="form-label">No.Pengiriman</label>
            <input type="text"
              class="form-control form-control-sm" name="id" id="id" aria-describedby="helpId" placeholder="id" value="<?php echo e(Session::get('id')); ?>">
          </div>
        <div class="mb-3">
          <label for="no_pengiriman" class="form-label">No.Transaksi</label>
          <input type="text"
            class="form-control form-control-sm" name="no_pengiriman" id="no_pengiriman" aria-describedby="helpId" placeholder="no_pengiriman" value="<?php echo e(Session::get('no_pengiriman')); ?>">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date"
              class="form-control form-control-sm" name="tanggal" id="tanggal" aria-describedby="helpId" placeholder="tanggal" value="<?php echo e(Session::get('tanggal')); ?>">
        </div>
        <div class="mb-3">
          <label for="lokasi_id" class="form-label">Lokasi</label>
          <select name="lokasi_id" class="form-control">
              <option value="">- Pilih Lokasi -</option>
              <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($item->id); ?>"><?php echo e($item->lokasi_outlet); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>
        <div class="mb-3">
          <label for="barang_id" class="form-label">Nama Barang</label>
          <select name="barang_id" class="form-control">
              <option value="">- Pilih Nama Barang -</option>
              <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama_barang); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="text"
              class="form-control form-control-sm" name="jumlah_barang" id="jumlah_barang" aria-describedby="helpId" placeholder="jumlah_barang" value="<?php echo e(Session::get('jumlah_barang')); ?>">
        </div>
        <div class="mb-3">
          <label for="harga_barang" class="form-label">Harga Barang</label>
          <input type="text"
            class="form-control form-control-sm" name="harga_barang" id="harga_barang" aria-describedby="helpId" placeholder="harga_barang" value="<?php echo e(Session::get('harga_barang')); ?>">
      </div>
        <div class="mb-3">
          <label for="kurir_id" class="form-label">ID Kurir</label>
          <select name="kurir_id" class="form-control">
              <option value="">- Pilih ID Kurir -</option>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/pengiriman/pengirimancreate.blade.php ENDPATH**/ ?>