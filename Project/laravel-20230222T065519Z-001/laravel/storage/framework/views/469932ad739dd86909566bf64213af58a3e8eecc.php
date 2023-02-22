


<?php $__env->startSection('main_section'); ?>
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Add product</h1>
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
                                <div class="ibox-title">Add product</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="<?php echo e(url('edit_product/'.$product->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                        <select name="cate_id" class="form-control"  required="required" >
										<option value="">Select Category</option>
										<?php
										foreach($category as $c)
										{
											if($c->id==$product->cate_id)
											{
										?>
											<option value="<?php echo $c->id?>" selected>
															<?php echo $c->cate_name?>
											</option>
										<?php
											}
											else
											{
											?>
											<option value="<?php echo $c->id?>">
															<?php echo $c->cate_name?>
											</option>
										<?php	
											}										
										}
										?>
									</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">product name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="prod_name" value="<?php echo e($product->prod_name); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">short description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  name="short_desc" value="<?php echo e($product->short_desc); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long description</label>
                                        <div class="col-sm-10">
                                            <textarea name="long_disc"  class="form-control" rols="10" cols="15"><?php echo e($product->long_disc); ?>

                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">main price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"  name="mainprice" value="<?php echo e($product->mainprice); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">discount price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"  name="discprice" value="<?php echo e($product->discprice); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">main image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file"  name="img">
                                            <img class="" src="<?php echo e(url('backend/assets/img/upload/product/'.$product->img)); ?>" width="50px" alt="">
                                        </div>
                                    </div>
                                <?php    
                                $multiple_img=$product->multiple_img;
                                $arr_img=explode(',',$multiple_img);
                                ?>
                                
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Multiple image</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="file"  name="multiple_img[]" multiple />
                                        <?php $__currentLoopData = $arr_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(url('backend/assets/img/upload/product/'.$multiple_img)); ?>" width="30" height="30">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/backend/edit_product.blade.php ENDPATH**/ ?>