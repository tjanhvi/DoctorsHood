<?php $__env->startSection('content'); ?>
<div id="setup-user-profile"></div>
<script>
    var patient = '<?php echo e(base64_encode(json_encode($patient))); ?>';
    patient = JSON.parse(atob(patient));
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/user/setupUserProfile.blade.php ENDPATH**/ ?>