<?php $__env->startSection('main_section1'); ?>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="<?php echo e(url('/register')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1"> Doctor Registrations Form</h3>
                <p>Please enter your Doctor information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name"  placeholder=" Enter Name">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email"  placeholder=" Enter E-mail">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password"  placeholder=" Enter password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  type="text" name="description" placeholder=" Enter description">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  type="number" name="mobile" placeholder=" Enter Mobile-number">
                </div>
                <div class="form-group">
                    <textarea name="address" rols="10" cols="15" class="form-control form-control-lg" placeholder=" Enter address"></textarea>
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"  type="text" name="city" placeholder="Enter city">
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"  type="file" name="img">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary"  name="submit" type="submit">Register My Account</button>
                </div>

                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="<?php echo e(url('/login')); ?>" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.main1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/backend/register.blade.php ENDPATH**/ ?>