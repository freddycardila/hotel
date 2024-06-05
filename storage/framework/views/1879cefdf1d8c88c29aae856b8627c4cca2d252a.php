<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Lista de Reservas</h1>
        <a href="<?php echo e(route('bookings.create')); ?>" class="btn btn-primary mb-3">Crear Reserva</a>
        <?php if(count($bookings) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Habitación</th>
                        <th>Fecha de Entrada</th>
                        <th>Fecha de Salida</th>
                        <!-- Agrega más columnas según sea necesario -->
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($booking->room->name); ?></td>
                            <td><?php echo e($booking->start_date); ?></td>
                            <td><?php echo e($booking->end_date); ?></td>
                            <!-- Agrega más columnas según sea necesario -->
                            <td>
                                <a href="<?php echo e(route('bookings.edit', $booking->id)); ?>" class="btn btn-primary btn-sm">Editar</a>
                                <form action="<?php echo e(route('bookings.destroy', $booking->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay reservas.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel\resources\views/bookings/index.blade.php ENDPATH**/ ?>