<?php $__env->startSection('main_section'); ?>
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Manage Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up"> 
                <div class="ibox">     
                    <div class="ibox-head">
                        <div class="ibox-title">Manage Category</div>
                        <form action="<?php echo e(url('/manage_category')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <div class="input-group">
                          <input type="search" name="search"  value="<?php echo e($search); ?>" class="form-control"  placeholder="search">
                          <div class="input-group-btn">
                            <button  type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>

                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                       
                                <thead>
                                    <tr>
                                        <th> Category Id</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>                      
                                 </thead>
                                <tbody>
                                <?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
                                    <td><?php echo e($d->id); ?></td>
                                    <td><?php echo e($d->cate_name); ?></td>
                                    <td><img src="<?php echo e(url('backend/assets/img/upload/'.$d->cate_img)); ?>" width="50px"></td>
                                    <td>
                                    <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i> 
                                            <a href="edit_category/<?php echo e($d->id); ?>"> Edit</a>
                                        </button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i> 
                                            <a href="delete_category/<?php echo e($d->id); ?>"> Delete</a> 
                                        </button>
 
                                    </td>
									
                                </tr>
                            <?php
							}
							?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/backend/manage_category.blade.php ENDPATH**/ ?>