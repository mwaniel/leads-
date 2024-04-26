<?php $__env->startSection('content'); ?>
    <h1>All Salespersons</h1>
    <a href="<?php echo e(route('salespersons.create')); ?>" class="btn btn-primary mb-3">Add Salesperson</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Travel Spirit ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $salespersons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salesperson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($salesperson->salesname); ?></td>
                <td><?php echo e($salesperson->travelspirit_id); ?></td>
                <td>
                    <a href="<?php echo e(route('salespersons.show', $salesperson->id)); ?>" class="btn btn-info">View</a>
                    <a href="<?php echo e(route('salespersons.edit', $salesperson->id)); ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/salespersons/index.blade.php ENDPATH**/ ?>