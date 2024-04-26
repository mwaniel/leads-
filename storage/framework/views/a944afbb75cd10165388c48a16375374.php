<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h1 class="mb-4">All Leads</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Note</th>
                        <th>How</th>
                        <th>Mail ID</th>
                        <th>Mail Date</th>
                        <th>Mail Message</th>
                        <th>Mail Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($lead->name); ?></td>
                            <td><?php echo e($lead->surname); ?></td>
                            <td><?php echo e($lead->email); ?></td>
                            <td><?php echo e($lead->status); ?></td>
                            <td><?php echo e($lead->note); ?></td>
                            <td><?php echo e($lead->how); ?></td>
                            <td><?php echo e($lead->mail_id); ?></td>
                            <td><?php echo e($lead->mail_date); ?></td>
                            <td><?php echo e($lead->mail_message); ?></td>
                            <td><?php echo e($lead->mail_subject); ?></td>
                            <td>
                                <form action="<?php echo e(route('leads.update_status', $lead->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="good" <?php echo e($lead->status === 'good' ? 'selected' : ''); ?>>Good</option>
                                            <option value="bad" <?php echo e($lead->status === 'bad' ? 'selected' : ''); ?>>Bad</option>
                                            <option value="later" <?php echo e($lead->status === 'later' ? 'selected' : ''); ?>>Later</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="note" class="form-control" placeholder="Add note...">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Status</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadans/lead-management-app/resources/views/leads/index.blade.php ENDPATH**/ ?>