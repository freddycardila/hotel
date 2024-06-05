<?php $__env->startSection('content'); ?>
    <h1>Create room</h1>

    <form method="post" action="<?php echo e(route('productos.store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="nombre">Name:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="form-group">
            <label for="precio">Price:</label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>

        <div class="form-group">
            <label for="descripcion">Description:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/productos/create.blade.php ENDPATH**/ ?>