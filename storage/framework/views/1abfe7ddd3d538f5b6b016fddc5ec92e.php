
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('enrollments/' .$enrollments->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id"  class="form-control" value="<?php echo e($enrollments->id); ?>"/>
        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="<?php echo e($enrollments->enroll_no); ?>"class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="<?php echo e($enrollments->batch_id); ?>"></br>
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="<?php echo e($enrollments->student_id); ?>"></br>
        <label>Join Date</label></br>
        <input type="date" name="join_date" id="join_date" class="form-control" value="<?php echo e($enrollments->join_date); ?>"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="<?php echo e($enrollments->fee); ?>"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/enrollments/edit.blade.php ENDPATH**/ ?>