<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('main_section'); ?>
<?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ['total_cart'=>$total_cart] 
['wishlist'=>$wishlist  ] --><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/frontend/layout/main.blade.php ENDPATH**/ ?>