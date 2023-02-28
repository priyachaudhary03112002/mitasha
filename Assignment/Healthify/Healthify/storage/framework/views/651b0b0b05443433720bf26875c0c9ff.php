

<?php $__env->startSection('main_section'); ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Books - Appointments</h1>
                <a href="index.html">Home</a> <span>|</span> <a href="contact.html">Books - Appointments Form</a>
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
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <form action="#">
                        <div class="center">
                           <input type="text" class="form-control" name="name"  placeholder="Enter your name">
                            <textarea name="message" class="form-control" cols="20" rows="7"  placeholder="Enter Message"></textarea>
                            <input type="number" class="form-control" name="number"  placeholder="Enter your mobile-number">
                            <select name="doctor_id" class="form-control" >
										<option value="">Select Doctor</option>
										<?php
										foreach($doctor as $d)
										{
										?>
										<option value="<?php echo $d->id?>">
														<?php echo $d->name?>
										</option>
										<?php		
										}
										?>
									</select>
                        </div>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
                <div class="col-lg-6">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->



<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/frontend/book_appointment.blade.php ENDPATH**/ ?>