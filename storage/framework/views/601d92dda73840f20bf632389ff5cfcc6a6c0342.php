<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Crear Cuarto</h1>
        <form action="<?php echo e(route('rooms.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="capacity">Capacidad:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" required>
            </div>
            <div class="form-group">
    <label for="description">Descripción:</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>
            <div class="form-group">
                <label for="price_per_night">Precio por Noche:</label>
                <input type="number" step="0.01" class="form-control" id="price_per_night" name="price_per_night" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/rooms/create.blade.php ENDPATH**/ ?>