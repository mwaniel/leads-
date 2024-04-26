<?php $__env->startSection('content'); ?>
    <h1>Create Lead</h1>
    <form action="<?php echo e(route('leads.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="createdate">Create Date:</label>
            <input type="text" id="createdate" name="createdate" class="form-control">
        </div>
        <div class="form-group">
            <label for="how">How:</label>
            <input type="text" id="how" name="how" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" class="form-control">
        </div>
        <!-- Add more form fields here -->
        <div class="form-group">
            <label for="mail_id">Mail ID:</label>
            <input type="text" id="mail_id" name="mail_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="mail_date">Mail Date:</label>
            <input type="text" id="mail_date" name="mail_date" class="form-control">
        </div>
        <!-- Add more form fields as needed -->

        <button type="submit" class="btn btn-primary">Create Lead</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/leads/create.blade.php ENDPATH**/ ?>