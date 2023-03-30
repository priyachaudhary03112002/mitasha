


<?php $__env->startSection('main_section'); ?>
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Edit Blog</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                  
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit Blog</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="<?php echo e(url('edit_blog/'.$fetch->id)); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                 <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="title"  value="<?php echo e($fetch->title); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="description"  value="<?php echo e($fetch->description); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file"  name="image">
                                            <img class="" src="<?php echo e(url('backend/assets/img/upload/'.$fetch->image)); ?>" width="50px" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           
            <!-- END PAGE CONTENT-->
          
       
 
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/backend/edit_blog.blade.php ENDPATH**/ ?>