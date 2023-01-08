<?php $__env->startSection('content'); ?>
<div id="select-specialisation"></div>
<script>
    var id_arr = '<?php echo e(base64_encode(json_encode($id_arr))); ?>';
    id_arr = JSON.parse(atob(id_arr));

    var specialisation_arr = '<?php echo e(base64_encode(json_encode($specialisation_arr))); ?>';
    specialisation_arr = JSON.parse(atob(specialisation_arr));
   
    var specialisations = [];
    for(var i = 0; i < id_arr.length; i++) {
        var specialisation = {
            id: id_arr[i],
            name: specialisation_arr[i],
        };
        specialisations.push(specialisation);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/user/specialisation.blade.php ENDPATH**/ ?>