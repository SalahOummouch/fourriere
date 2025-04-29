<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="theme-fs-md">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Fourriere Alerts</title>

    <?php echo $__env->make('partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="<?php echo e(isset($bodyClass) ? $bodyClass : ''); ?>">
<?php echo $__env->make('partials._body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>