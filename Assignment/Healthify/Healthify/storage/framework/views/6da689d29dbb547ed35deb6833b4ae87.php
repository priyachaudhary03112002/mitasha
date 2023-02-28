

<?php $__env->startSection('main_section'); ?>
    
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Doctor Page</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> View Doctor Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">View Doctor List</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th> Email</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>Description</th>
                                                <th>Degree</th>
                                                <th>City</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $fetch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($f->id); ?></td>
                                                <td><img src="<?php echo e(url('backend/assets/img/upload/'.$f->img)); ?>" width="50px"></td>
                                                <td><?php echo e($f->name); ?></td>
                                               
                                                <td><?php echo e($f->email); ?></td>
                                                <td><?php echo e($f->address); ?></td>
                                                <td><?php echo e($f->mobile); ?></td>
                                                <td><?php echo e($f->description); ?></td>
                                                <td><?php echo e($f->degree); ?></td>
                                                <td><?php echo e($f->city); ?></td>
                                  </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </tbody>      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>

            </div>
            
        </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\Healthify\resources\views/backend/all_doctor.blade.php ENDPATH**/ ?>