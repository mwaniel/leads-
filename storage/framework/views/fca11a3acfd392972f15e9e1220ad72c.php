<?php $__env->startSection('content'); ?>
    <h1>Salesperson Details</h1>
    <p><strong>Name:</strong> <?php echo e($salesperson->salesname); ?></p>
    <p><strong>Travel Spirit ID:</strong> <?php echo e($salesperson->travelspirit_id); ?></p>
    <!-- Show other details as needed -->
    <a href="<?php echo e(route('salespersons.index')); ?>" class="btn btn-secondary">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/salespersons/show.blade.php ENDPATH**/ ?>