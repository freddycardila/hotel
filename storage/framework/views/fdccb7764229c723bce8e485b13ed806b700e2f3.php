<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Reserve Room: ') . $room->name); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('reservations.store', $room->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="check_in_date"><?php echo e(__('Check-in Date')); ?></label>
                            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
                        </div>
                        <div class="form-group">
                            <label for="check_out_date"><?php echo e(__('Check-out Date')); ?></label>
                            <input type="date" class="form-control" id="check_out_date" name="check_out_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Reserve')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/reservations/create.blade.php ENDPATH**/ ?>