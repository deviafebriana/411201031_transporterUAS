

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Tabel Transaksi</p>
    <div class="pb-3"><a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-primary">+ Tambah Data Transaksi</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Transaksi</th>
                    <th>Nama Sales</th>
                    <th>Nama Barang</th>
                    <th>Nama Outlet</th>
                    <th>Jumlah Stok</th>
                    <th>Jumlah Display</th>
                    <th>Time Visit</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i); ?></td>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->nama_sales); ?></td>
                    <td><?php echo e($item->nama_barang); ?></td>
                    <td><?php echo e($item->nama_outlet); ?></td>
                    <td><?php echo e($item->jumlah_stok); ?></td>
                    <td><?php echo e($item->jumlah_display); ?></td>
                    <td><?php echo e($item->visit_datetime); ?></td>
                    <td>
                        <a href="<?php echo e(route('transaksi.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="<?php echo e(route('transaksi.destroy', $item->id)); ?>" class="d-inline" method="POST">
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

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/transaksi/transaksiindex.blade.php ENDPATH**/ ?>