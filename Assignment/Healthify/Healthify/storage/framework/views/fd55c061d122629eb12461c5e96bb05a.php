

<?php $__env->startSection('main_section'); ?>
    
  <!-- ============================================================== -->
  <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title"> Edit Appointment Page </h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <div class="page-section" id="overview">
                            <!-- ============================================================== -->
                            <!-- overview  -->
                            <!-- ============================================================== -->
                        
                            <!-- ============================================================== -->
                            <!-- end overview  -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Edit Form Page</h3>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">Basic Form</h5>
                                    <div class="card-body">
                                        <form action="<?php echo e(url('edit_app/'.$fetch->id)); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Name</label>
                                                <input type="text" name="name"  value="<?php echo e($fetch->name); ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Patient-Media</label>
                                                <input type="file" name="media" class="form-control">
                                                <img class="" src="<?php echo e(url('frontend/assets/images/upload/'.$fetch->media)); ?>" width="50px" alt="">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Address</label>
                                                <textarea name="address" rols="15" cols="15" class="form-control"><?php echo e($fetch->address); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Age</label>
                                                <input type="text" name="age" value="<?php echo e($fetch->age); ?>" class="form-control">
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Mobile</label>
                                                <input type="text" name="mobile" value="<?php echo e($fetch->mobile); ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Date</label>
                                                <input type="text" name="date" value="<?php echo e($fetch->date); ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">City</label>
                                                <input type="text" name="city" value="<?php echo e($fetch->city); ?>" class="form-control">
                                            </div>
                                            <button class="btn btn-default btn-xs m-r-5" type="submit" name="submit">Submit
                                        </button>
                                        </form>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
                  </div>
             </div>
         </div>
    </div>     
  <?php $__env->stopSection(); ?>                      
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/backend/edit_app.blade.php ENDPATH**/ ?>