<?php $__env->startSection('content'); ?>
<script>
    var id_arr = '<?php echo e(base64_encode(json_encode($id_arr))); ?>';
    id_arr = JSON.parse(atob(id_arr));

    var name_arr = '<?php echo e(base64_encode(json_encode($name_arr))); ?>';
    name_arr = JSON.parse(atob(name_arr));

    var dosage_arr = '<?php echo e(base64_encode(json_encode($dosage_arr))); ?>';
    dosage_arr = JSON.parse(atob(dosage_arr));

    var type_arr = '<?php echo e(base64_encode(json_encode($type_arr))); ?>';
    type_arr = JSON.parse(atob(type_arr));

    var instruction_arr = '<?php echo e(base64_encode(json_encode($instruction_arr))); ?>';
    instruction_arr = JSON.parse(atob(instruction_arr));

    var frequency_arr = '<?php echo e(base64_encode(json_encode($frequency_arr))); ?>';
    frequency_arr = JSON.parse(atob(frequency_arr));

    var time_arr = '<?php echo e(base64_encode(json_encode($time_arr))); ?>';
    time_arr = JSON.parse(atob(time_arr));

    var day_arr = '<?php echo e(base64_encode(json_encode($day_arr))); ?>';
    day_arr = JSON.parse(atob(day_arr));

    var status_arr = '<?php echo e(base64_encode(json_encode($status_arr))); ?>';
    status_arr = JSON.parse(atob(status_arr));

   
    var medicine_reminders = [];
    for(var i = 0; i < id_arr.length; i++) {
        var medicine_reminder = {
            id: id_arr[i],
            name: name_arr[i],
            dosage: dosage_arr[i],
            type: type_arr[i],
            instruction: instruction_arr[i],
            frequency: frequency_arr[i],
            time: time_arr[i],
            day: day_arr[i],
            status: status_arr[i]
        };
        medicine_reminders.push(medicine_reminder);
    }
</script>
<div id="medicine-reminder"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/user/medicineReminder.blade.php ENDPATH**/ ?>