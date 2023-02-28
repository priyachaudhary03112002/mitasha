

<?php $__env->startSection('main_section'); ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>patients - Appointments</h1>
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
                        <h2>Appointments Form</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                    <div class="col-lg-12">
                    <div>
                        <h3 class="mb-5">appointment now</h3>
                        <form action="<?php echo e(url('/appointment_form')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                            <input type="file" class="form-control"  name="media">
                            </div>
                           
                            <div class="form-group">
                            <input type="text" class="form-control" name="name"  placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="age"  placeholder="Enter your age">
                            </div>
                            <div class="form-group">
                            <textarea name="address" class="form-control" cols="20" rows="7"  placeholder="Enter address"></textarea>
                            </div>
                            <div class="form-group"> 
                                <input type="number" class="form-control" name="mobile"  placeholder="Enter your mobile-number">
                            </div>
                            <div class="form-group">
                            <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="city"   placeholder="Enter city">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="doctor_name"   placeholder="Enter doctor name">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="description"   placeholder="Enter description">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="degree"   placeholder="Enter degree">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="day_time"   placeholder="Enter day-time">
                            </div>
                            <button type="submit" name="submit" class="template-btn">appointment Register now</button>
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



<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/frontend/appointment_form.blade.php ENDPATH**/ ?>