<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Reservation Details')); ?></div>
                <div class="card-body">
                    <h5><?php echo e($reservation->room->name); ?></h5>
                    <p>Check-in Date: <?php echo e($reservation->check_in_date); ?></p>
                    <p>Check-out Date: <?php echo e($reservation->check_out_date); ?></p>
                    <p>Price per night: $<?php echo e($reservation->room->price_per_night); ?></p>
                    <form method="POST" action="<?php echo e(route('reservations.destroy', $reservation->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Cancel Reservation')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/reservations/show.blade.php ENDPATH**/ ?>