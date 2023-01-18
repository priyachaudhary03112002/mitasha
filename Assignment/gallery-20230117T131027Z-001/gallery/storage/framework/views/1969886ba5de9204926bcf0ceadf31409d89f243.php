


<?php $__env->startSection('main_section'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic Layout</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="<?php echo e(url('/add_photo')); ?>" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Name</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">image</label>
                <input type="file" class="form-control" name="img">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company"> Multiple image</label>
                <input type="file" class="form-control" name="multi_img[]"  multiple/>
              </div>
               <button type="submit"  name="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\gallery\resources\views/backend/add_photo.blade.php ENDPATH**/ ?>