
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('enrollments')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Batch</label></br>
        <select name="batch_id" id="batch_id" class="form-control">
         <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label>Student</label></br>
        <select name="student_id" id="student_id" class="form-control">
         <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label>Join Date</label></br>
        <input type="date" name="join_date" id="join_date" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/enrollments/create.blade.php ENDPATH**/ ?>