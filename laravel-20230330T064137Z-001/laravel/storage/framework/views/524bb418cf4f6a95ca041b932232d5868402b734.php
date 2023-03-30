<?php $__env->startSection('main_section'); ?>

<div class="hero-wrap hero-bread" style="background-image: url(<?php echo e(url('frontend/images/back3.jpg')); ?>);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>
	<form action="<?php echo e(url('product_single/'.$product_data->id)); ?>" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
      <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?php echo e(url('backend/assets/img/upload/product/'.$product_data->img)); ?>" class="image-popup"><img src="<?php echo e(url('backend/assets/img/upload/product/'.$product_data->img)); ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
			     
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo e($product_data->prod_name); ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<!-- <p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p> -->
						</div>
    				<p class="price"><h5><span style="color: #bbb;">MRP:<del>₹<?php echo e($product_data->mainprice); ?></del></span>
					<span>₹<?php echo e($product_data->discprice); ?></span></p></h5>
					<b>Short Description</b><br>
    				<p><?php echo e($product_data->short_desc); ?>

						</p>
			    <div class="row mt-4">
						<b>Product Description</b><br>
						<p id="main"><?php echo e($product_data->long_disc); ?></p>
						
						<a href="#"  id="show">Read More</a>
						<a href="#" id="hide" style="display: none;">Read less</a>

						<input type="hidden" name="cust_id" value= "<?php echo e(session('cust_id')); ?>">
				 <input type="hidden" name="prod_id" value="<?php echo e($product_data->id); ?>">

					
</form>    
					<!-- <div class="col-md-6">
					<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div> 
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select> 
	                </div>
		            </div>
					</div> -->

					<!-- <form action="<?php echo e(url('product-single/'.$product_data->id)); ?>" method="post"> 
						<?php echo csrf_field(); ?>                          
                    -->
							<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
						
	             	<input type="number" name="qty" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
					 </span>
	          	</div> 
				 
				<!-- <div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">600 kg available</p>
	          	</div>        -->
          	</div>
          	<!-- <p><a href="#" class="btn btn-black py-3 px-5">Add to Cart</a></p> -->
			<div class="form-group">
			<input type="submit" name="submit" value="Add to Cart" class="btn btn-black py-3 px-5">
				</div>
    			</div>
    		</div>
    	</div>
		<?php
 $multiple_img=$product_data->multiple_img;
 $arr_img=explode(',',$multiple_img);
?>
<div class="row">
<div class="col-md-4">
<?php $__currentLoopData = $arr_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
<a href="<?php echo e(url('backend/assets/img/upload/product/'.$multiple_img)); ?>" class="image-popup"><img src="<?php echo e(url('backend/assets/img/upload/product/'.$multiple_img)); ?>" width="100"></a> 
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	         
	</div>
</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		  
    	</div>
    	<div class="container">
    		<div class="row">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="<?php echo e(url('product_single/'.$d->id)); ?>" class="img-prod"><img class="img-fluid" src="<?php echo e(url('backend/assets/img/upload/product/'.$d->img)); ?>" alt="Colorlib Template">
						<?php if($d->status=="Out of Stock"): ?>	
							<span class="status"><?php echo e($d->status); ?></span>
							<?php endif; ?>
    						<div class="overlay"></div>
    					</a>
		
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo e($d->prod_name); ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹<?php echo e($d->mainprice); ?></span><span class="price-sale">₹<?php echo e($d->discprice); ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu" style="color:white;"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart" style="color:white;"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart" style="color:white;"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/frontend/product_single.blade.php ENDPATH**/ ?>