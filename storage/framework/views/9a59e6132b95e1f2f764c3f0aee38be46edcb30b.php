<?php $__env->startSection('content'); ?>
    <h1>Productos</h1>

    <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary">Agregar</a> <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($producto->id); ?></td>
                    <td><?php echo e($producto->nombre); ?></td>
                    <td><?php echo e($producto->precio); ?></td>
                    <td><?php echo e($producto->descripcion); ?></td>
                    <td>
                        <a href="<?php echo e(route('productos.show', $producto->id)); ?>">Ver</a> |
                        <a href="<?php echo e(route('productos.edit', $producto->id)); ?>">Editar</a> |
                        <form action="<?php echo e(route('productos.destroy', $producto->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/productos/index.blade.php ENDPATH**/ ?>