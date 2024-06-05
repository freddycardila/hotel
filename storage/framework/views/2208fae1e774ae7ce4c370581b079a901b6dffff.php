<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Rooms')); ?></div>
                <div class="card-body">
                    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="room">
                            <h5><?php echo e($room->name); ?></h5>
                            <p><?php echo e($room->description); ?></p>
                            <p>Capacity: <?php echo e($room->capacity); ?></p>
                            <p>Price per night: $<?php echo e($room->price_per_night); ?></p>
                            <a href="<?php echo e(route('reservations.create', $room->id)); ?>" class="btn btn-primary">Reserve</a>
                            <a href="<?php echo e(route('reservations.show', $room->id)); ?>" class="btn btn-primary">Show</a>
                        </div>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/reservations/index.blade.php ENDPATH**/ ?>