
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('batches')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course</label></br>
        <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->
         <select name="course_id" id="course_id" class="form-control">
         <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/batches/create.blade.php ENDPATH**/ ?>