

<?php $__env->startSection('main_section1'); ?>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
        <div class="card-header">
                <h3 class="mb-1"> patients Login Form</h3>
                <p>Please enter your patients information.</p>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/login_patient')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input class="form-control form-control-lg"  type="email" name="email" placeholder="enter email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg"  type="password" name="password" placeholder=" enter Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo e(url('/register_patient')); ?>" class="footer-link">Create An Account</a></div>
                <!-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div> -->
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo e(url('backend/assets/vendor/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
</body>
 
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.main1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/backend/login_patient.blade.php ENDPATH**/ ?>