


<?php $__env->startSection('main_section'); ?>

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Manage product</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up"> 
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Manage Product</div>
                        <form action="<?php echo e(url('/manage_product')); ?>" method="post">
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
                                        <th>Product Id</th>
                                        <th>Category Name</th>
                                        <th>Product Name</th>
                                        <th>Short Description</th>
                                        <th>Long Description</th>
                                        <th>Main Price</th>
                                        <th>discount Price</th>
                                        <th>Main image</th>
                                        <th>Multiple image</th>
                                        <th>status</th>
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
                                        <td><?php echo e($d->prod_name); ?></td>
                                        <td><?php echo e($d->short_desc); ?></td>
                                        <td><?php echo e($d->long_disc); ?></td>
                                        <td><?php echo e($d->mainprice); ?></td>
                                        <td><?php echo e($d->discprice); ?></td>
                                        <td><img src="<?php echo e(url('backend/assets/img/upload/product/'.$d->img)); ?>" width="30px"></td>
                                        <td>
                                            <?php
                                            $multiple_img=$d->multiple_img;
                                            $arr_img=explode(',',$multiple_img);
                                            ?>
                            <?php $__currentLoopData = $arr_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                                <img src="<?php echo e(url('backend/assets/img/upload/product/'.$multiple_img)); ?>" width="20px">          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td> 
                            <td>
                            <?php if($d->status=="Stock"): ?>
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-outline-success btn-xs btn-rounded"><?php echo e($d->status); ?></a></td>
                            <?php elseif($d->status=="Out of stock"): ?>
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-outline-danger btn-xs btn-rounded"><?php echo e($d->status); ?></a></td>
                            <?php endif; ?> 
                                                 
                            <td>
                            <a href="edit_product/<?php echo e($d->id); ?>" class="btn btn-success btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i>  Edit</a>
                        <a href="delete_product/<?php echo e($d->id); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i> Delete</a> 
                                        
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
 
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/backend/manage_product.blade.php ENDPATH**/ ?>