<?php $__env->startSection('main_section'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Employee Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">Employee Id</th>
                      <th>First Name</th>
                      <th>email</th>
                      <th>mobile</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $fetch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($data->id); ?></td>
                      <td><?php echo e($data->fname); ?></td>
                      <td><?php echo e($data->email); ?></td>
                      <td><?php echo e($data->mobile); ?></td>
                      <td><?php echo e($data->address); ?></td>
                      <td><?php echo e($data->date); ?></td>
                      <td><button class="btn btn-default btn-xs m-r-5">
                      <a href="edit_emp/<?php echo e($data->id); ?>">Edit</a>
                    </button>
                    <button class="btn btn-default btn-xs m-r-5">
                    <a href="delete/<?php echo e($data->id); ?>">Delete</a>
                    </button>
                  </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
							</tr>
            
								
								<?php echo e($fetch->links()); ?>


						
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                         </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\emp\resources\views/backend/manage_emp.blade.php ENDPATH**/ ?>