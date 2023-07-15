

<?php $__env->startSection('konten'); ?>
    <p class="card-title">Tabel Barang</p>
    <div class="pb-3"><a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary">+ Tambah Data Barang</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i); ?></td>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->nama_barang); ?></td>
                    <td><?php echo e($item->deskripsi); ?></td>
                    <td><?php echo e($item->stok_barang); ?></td>
                    <td><?php echo e($item->harga_barang); ?></td>
                    <td>
                        <a href="<?php echo e(route('barang.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Delete data?')" action="<?php echo e(route('barang.destroy', $item->id)); ?>" class="d-inline" method="POST">
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

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas_fullstack\resources\views/dashboard/barang/index.blade.php ENDPATH**/ ?>