

<?php $__env->startSection('main_section'); ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Login Appointments</h1>
                <a href="index.html">Home</a> <span>|</span> <a href="contact.html">patients - Appointments Form</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

    <!-- Map Area Starts -->
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="section-top text-center">
                        <h2>Appointments  Login Form</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                    <div class="col-lg-12">
                    <div>
                        <h3 class="mb-5">appointment Login  now</h3>
                        <form action="<?php echo e(url('/login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                            <input type="text" class="form-control" name="email"  placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Enter your password">
                            </div>
                            <button type="submit" name="submit" class="template-btn">appointment now</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
   
   
    <!-- Contact Form End -->



<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/frontend/login.blade.php ENDPATH**/ ?>