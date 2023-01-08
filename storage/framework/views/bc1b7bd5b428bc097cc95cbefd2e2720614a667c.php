<?php $__env->startSection('content'); ?>
<div id="virtual-doctor"></div>
<script>
    var role = '<?php echo e(base64_encode(json_encode($role))); ?>';
    role = JSON.parse(atob(role));
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/user/virtualDoctor.blade.php ENDPATH**/ ?>