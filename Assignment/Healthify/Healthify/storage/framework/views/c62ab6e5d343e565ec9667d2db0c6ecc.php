

<?php $__env->startSection('main_section'); ?>
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
                        <form action="<?php echo e(url('edit_profile/'.$fetch->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <!-- <div class="form-group">
                            <input type="file" class="form-control"  name="media">
                            </div> -->
                           
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" value="<?php echo e($fetch->name); ?>">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="email" value="<?php echo e($fetch->email); ?>">
                            </div>

                            
                            <button type="submit" name="submit" class="template-btn">Update</button>
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
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/frontend/edit_profile.blade.php ENDPATH**/ ?>