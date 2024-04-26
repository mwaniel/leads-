<?php $__env->startSection('content'); ?>
    <h1>Edit Salesperson</h1>
    <form action="<?php echo e(route('salespersons.update', $salesperson->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="salesname">Name</label>
            <input type="text" class="form-control" id="salesname" name="salesname" value="<?php echo e($salesperson->salesname); ?>" required>
        </div>
        <div class="form-group">
            <label for="travelspirit_id">Travel Spirit ID</label>
            <input type="text" class="form-control" id="travelspirit_id" name="travelspirit_id" value="<?php echo e($salesperson->travelspirit_id); ?>" required>
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/salespersons/edit.blade.php ENDPATH**/ ?>