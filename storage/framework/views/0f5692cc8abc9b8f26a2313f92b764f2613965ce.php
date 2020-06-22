<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Visit Toba</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        body {
            color: #fff;
            background: url(<?php echo e(asset('img/21.jpg')); ?>);
            background-size: cover;     /* Tambahkan baris berikut */
        }
    </style>
</head>
<body>
<div id="app">
    <?php echo $__env->make('layout.auth.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="py-4" style="margin-top: 80px">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/layout/auth/app.blade.php ENDPATH**/ ?>