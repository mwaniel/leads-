<!DOCTYPE html>
<html>
<head>
    <title>Lead Data</title>
</head>
<body>
    <p><strong>Surname:</strong> <?php echo e($leadData['surname']); ?></p>
    <p><strong>Email:</strong> <?php echo e($leadData['email']); ?></p>
    <p><strong>Deal Created:</strong> <?php echo e($leadData['deal_created']); ?></p>
    <p><strong>Lead Type:</strong> <?php echo e($leadData['lead_type']); ?></p>
    <p><strong>Sales Person ID:</strong> <?php echo e($leadData['sales_person_id']); ?></p>
</body>
</html>
<?php /**PATH /home/sadans/lead-management-app/resources/views/emails/leadjson.blade.php ENDPATH**/ ?>