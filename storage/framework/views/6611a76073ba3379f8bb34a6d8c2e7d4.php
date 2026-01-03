
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('payments/' .$payments->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($payments->id); ?>" />
        <label>Enrollment Id</label></br>
        <input type="text" name="enrollment_id" id="enrollment_id" value="<?php echo e($payments->enrollment->enroll_no); ?>" class="form-control"></br>
        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="<?php echo e($payments->paid_date); ?>" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="<?php echo e($payments->amount); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web-Development\08.LARAVEL\12.PROJECTS\studentmanagement-app\resources\views/payments/edit.blade.php ENDPATH**/ ?>