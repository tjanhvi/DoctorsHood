<?php $__env->startSection('content'); ?>
<div id="my-appointments"></div>
<script>
    var appointment_id_arr = '<?php echo e(base64_encode(json_encode($appointment_id_arr))); ?>';
    appointment_id_arr = JSON.parse(atob(appointment_id_arr));

    var app_patient_id_arr = '<?php echo e(base64_encode(json_encode($app_patient_id_arr))); ?>';
    app_patient_id_arr = JSON.parse(atob(app_patient_id_arr));

    var app_doctor_id_arr = '<?php echo e(base64_encode(json_encode($app_doctor_id_arr))); ?>';
    app_doctor_id_arr = JSON.parse(atob(app_doctor_id_arr));

    var appointment_type_arr = '<?php echo e(base64_encode(json_encode($appointment_type_arr))); ?>';
    appointment_type_arr = JSON.parse(atob(appointment_type_arr));

    var status_arr = '<?php echo e(base64_encode(json_encode($status_arr))); ?>';
    status_arr = JSON.parse(atob(status_arr));

    var meeting_link_arr = '<?php echo e(base64_encode(json_encode($meeting_link_arr))); ?>';
    meeting_link_arr = JSON.parse(atob(meeting_link_arr));

    var date_arr = '<?php echo e(base64_encode(json_encode($date_arr))); ?>';
    date_arr = JSON.parse(atob(date_arr));

    var time_arr = '<?php echo e(base64_encode(json_encode($time_arr))); ?>';
    time_arr = JSON.parse(atob(time_arr));

    var mainAppointmentArr = [];
    for(var i = 0; i < appointment_id_arr.length; i++) {
        var data = {
            app_id : appointment_id_arr[i],
            patient_id : app_patient_id_arr[i],
            doctor_id : app_doctor_id_arr[i],
            app_type : appointment_type_arr[i],
            status : status_arr[i],
            meet_link : meeting_link_arr[i],
            date : date_arr[i],
            time : time_arr[i]
        };
        mainAppointmentArr.push(data);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JANHVI TIWARI\Dropbox\My PC (Janhvi)\Downloads\doctorsHood-main\doctorsHood-main\resources\views/user/appointments.blade.php ENDPATH**/ ?>