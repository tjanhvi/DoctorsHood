<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?> | DoctorsHood</title>
    <!-- Tailwind CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- React script files -->
    <script src="<?php echo e(asset('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/layouts/userLayout.blade.php ENDPATH**/ ?>