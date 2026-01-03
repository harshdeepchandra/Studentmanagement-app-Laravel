
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Batches Edit</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('batches/' .$batches->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($batches->id); ?>" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($batches->name); ?>" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_id" id="course_id" value="<?php echo e($batches->course_id); ?>" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" value="<?php echo e($batches->start_date); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/batches/edit.blade.php ENDPATH**/ ?>