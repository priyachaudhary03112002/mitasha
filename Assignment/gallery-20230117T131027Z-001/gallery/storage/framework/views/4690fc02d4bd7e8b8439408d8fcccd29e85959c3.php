

<?php $__env->startSection('main_section'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>image</th>
              <th>multiple image</th>
            </tr>
          </thead>
          
          <tbody class="table-border-bottom-0">
          <?php
             foreach($fetch as $d)
             {
             $multi_img=$d->multi_img;
             $multi_img_arr=explode(',',$multi_img);
             
          ?>
            <tr>
              <td><?php echo e($d->id); ?></td>
              <td><?php echo e($d->name); ?></td>
              <td><img src="<?php echo e(url('backend/assets/img/upload/'.$d->img)); ?>" width="50px"></td>
              <td>
                 <?php $__currentLoopData = $multi_img_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multi_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(url('backend/assets/img/upload/product/'.$multi_img)); ?>" width="50px">
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </td>

            </tr>
          </tbody>
          <?php } ?>
        </table>
      </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\gallery\resources\views/backend/manage_photo.blade.php ENDPATH**/ ?>