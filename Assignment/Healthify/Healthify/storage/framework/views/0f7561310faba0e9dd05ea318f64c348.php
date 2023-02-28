<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Healthify</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(url('backend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(url('backend//assets/vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('backend//assets/libs/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('backend//assets/vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<body>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/backend/layout/header1.blade.php ENDPATH**/ ?>