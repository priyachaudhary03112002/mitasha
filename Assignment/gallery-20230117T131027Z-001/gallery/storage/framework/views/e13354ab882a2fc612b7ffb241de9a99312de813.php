<?php $__env->startSection('main_section'); ?>
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="<?php echo e(url('backend/assets/img/upload/'.$d->img)); ?>" alt="">
                        <?php
                        $multi_img=$d->multi_img;
                        $multi_imgarr=explode(',',$multi_img);
                        ?>
                        <?php $__currentLoopData = $multi_imgarr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multi_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(url('backend/assets/img/upload/product/'.$multi_img)); ?>" width="50px">
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4><?php echo e($d->name); ?></h4>
                        </div>

                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Single Catagory -->
</div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\gallery\resources\views/frontend/index.blade.php ENDPATH**/ ?>