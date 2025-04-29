<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="theme-fs-md">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Fourriere Alerts</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </head>
    <body class="  " >

         
          <!-- loader Start -->
    <div id="loading">
        <?php echo $__env->make('partials._body_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!-- loader END -->

        <div class="wrapper">
            <?php echo e($slot); ?>

        </div>

        <?php echo $__env->make('partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/layouts/guest.blade.php ENDPATH**/ ?>