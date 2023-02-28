

<?php $__env->startSection('main_section'); ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>patients - view List</h1>
                <a href="index.html">Home</a> <span>|</span> <a href="contact.html">patients - view-List</a>
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
                        <h2>View patients List</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                    <div class="col-lg-12">
                    <div>
                        <h3 class="mb-5">View patients List</h3>
                        <form action="<?php echo e(url('/view_patient')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                              <select name="patient_id" class="form-control">
										<option value="">Select Patient</option>
										<?php
										foreach($patient as $p)
										{
										?>
										<option value="<?php echo $p->id?>">
														<?php echo $p->name?>
										</option>
										<?php		
										}
										?>
									</select>
                            </div>
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
                            <textarea name="address" class="form-control" cols="20" rows="7"  placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group"> <input type="number" class="form-control" name="number"  placeholder="Enter your mobile-number">
                            </div>
                            <div class="form-group">
                            <input type="date" class="form-control" name="last_visit">
                            </div>
                            <button type="submit" class="template-btn">appointment Register now</button>
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



<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/frontend/view_patient.blade.php ENDPATH**/ ?>