
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Batch Name : <?php echo e($batches->name); ?></h5>
        <p class="card-text">Course Name : <?php echo e($batches->course_id); ?></p>
        <p class="card-text">Start Date : <?php echo e($batches->start_date); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/batches/show.blade.php ENDPATH**/ ?>