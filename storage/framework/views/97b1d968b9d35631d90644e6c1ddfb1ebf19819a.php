

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Tabel Pengiriman</p>
    <div class="pb-3"><a href="<?php echo e(route('pengiriman.create')); ?>" class="btn btn-primary">+ Tambah Data Pengiriman</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>No.Pengiriman</th>
                    <th>No.Transaksi</th>
                    <th>Tanggal</th>
                    <th>ID Lokasi Outlet</th>
                    <th>ID Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>ID Kurir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i); ?></td>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->no_pengiriman); ?></td>
                    <td><?php echo e($item->tanggal); ?></td>
                    <td><?php echo e($item->lokasi_id); ?></td>
                    <td><?php echo e($item->barang_id); ?></td>
                    <td><?php echo e($item->jumlah_barang); ?></td>
                    <td><?php echo e($item->harga_barang); ?></td>
                    <td><?php echo e($item->kurir_id); ?></td>
                    <td>
                        <form onsubmit="return confirm('Delete data?')" action="<?php echo e(route('pengiriman.destroy', $item->id)); ?>" class="d-inline" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
        </table>
    </div>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/pengiriman/pengirimanindex.blade.php ENDPATH**/ ?>