<?php $__env->startSection('content'); ?>
    <h1>Lead Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: <?php echo e($lead->name); ?></h5>
            <p class="card-text">Surname: <?php echo e($lead->surname); ?></p>
            <p class="card-text">Email: <?php echo e($lead->email); ?></p>
            <p class="card-text">Create Date: <?php echo e($lead->createdate); ?></p>
            <p class="card-text">How: <?php echo e($lead->how); ?></p>
            <p class="card-text">Type: <?php echo e($lead->type); ?></p>
            <p class="card-text">Mail ID: <?php echo e($lead->mail_id); ?></p>
            <p class="card-text">Mail Date: <?php echo e($lead->mail_date); ?></p>
            <p class="card-text">Mail Message: <?php echo e($lead->mail_message); ?></p>
            <p class="card-text">Mail Subject: <?php echo e($lead->mail_subject); ?></p>
            <p class="card-text">Mail JSON: <?php echo e($lead->mail_json); ?></p>
            <!-- Add more fields as needed -->
        </div>
    </div>
    <a href="<?php echo e(route('leads.index')); ?>" class="btn btn-primary mt-3">Back to All Leads</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/leads/show.blade.php ENDPATH**/ ?>