<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Lista de Cuartos</h1>
        <!-- Agregar botón para crear nuevo cuarto -->
        <div class="mb-3">
            <a href="<?php echo e(route('rooms.create')); ?>" class="btn btn-primary">Crear Nuevo Cuarto</a>
        </div>

        <!-- Mostrar mensaje de éxito si existe -->
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Tabla para mostrar la lista de cuartos -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Precio por Noche</th>
                    <th>Descripción</th>
                    <th>Acciones</th> <!-- Nueva columna para acciones -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($room->name); ?></td>
                        <td><?php echo e($room->capacity); ?></td>
                        <td>$<?php echo e($room->price_per_night); ?></td>
                        <td><?php echo e($room->description); ?></td>
                        <td>
                            <a href="<?php echo e(route('rooms.edit', $room->id)); ?>" class="btn btn-primary btn-sm">Editar</a>
                            <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cuarto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/rooms/index.blade.php ENDPATH**/ ?>