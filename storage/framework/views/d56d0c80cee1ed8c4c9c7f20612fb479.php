

<div id="loading">

     <?php echo $__env->make('partials._body_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">


<?php echo $__env->make('partials._body_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials._body_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-page ">
        <?php echo e($slot); ?>

    </div>
  </div>
  <!-- Wrapper End-->
<?php echo $__env->make('partials._body_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/partials/_body.blade.php ENDPATH**/ ?>