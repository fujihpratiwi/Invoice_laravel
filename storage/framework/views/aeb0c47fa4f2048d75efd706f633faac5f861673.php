<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Kota</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(url('/kota/')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="">Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control <?php echo e($errors->has('nama_kota') ? 'is-invalid':''); ?>" placeholder="Masukkan nama kota">
                                <p class="text-danger"><?php echo e($errors->first('nama_kota')); ?></p>
                            </div>
            
                            <div class="form-group">
                                <label for="">Ongkir</label>
                                <input type="text" name="ongkir" class="form-control <?php echo e($errors->has('ongkir') ? 'is-invalid':''); ?>" placeholder="Masukkan Ongkir">
                                <p class="text-danger"><?php echo e($errors->first('ongkir')); ?></p>
                            </div>
        
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>