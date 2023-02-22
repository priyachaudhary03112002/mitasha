
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>cosmetics - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('frontend/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('frontend/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('frontend/css/ionicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('frontend/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/jquery.timepicker.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('frontend/css/profile.css')); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script> 
jQuery(document).ready(function(){
	jQuery("#show").click(function(){
    jQuery("#show").css("display","none");
          jQuery("#hide").css("display","block");
          jQuery("#main").css("display","none");

  });
  jQuery("#hide").click(function(){
          jQuery("#show").css("display","block");
          jQuery("#hide").css("display","none");
          jQuery("#main").css("display","block");
       
  });
});

</script>
  </head>
  <body class="goto-here">
	
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">cosmetics</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo e(url('index')); ?>" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo e(url('shop')); ?>">Shop</a>
              	<a class="dropdown-item" href="<?php echo e(url('wishlist')); ?>">Wishlist</a>
                <!-- <a class="dropdown-item" href="<?php echo e(url('product-single')); ?>">Single Product</a>
                <a class="dropdown-item" href="<?php echo e(url('cart')); ?>">Cart</a>
                <a class="dropdown-item" href="<?php echo e(url('checkout')); ?>">Checkout</a> -->
              </div>
            </li>
	          <li class="nav-item"><a href="<?php echo e(url('about')); ?>" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?php echo e(url('blog')); ?>" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?php echo e(url('contact')); ?>" class="nav-link">Contact</a></li>
			  
			  <li class="nav-item cta cta-colored"><a href="<?php echo e(url('cart')); ?>" class="nav-link">
				<span class="icon-shopping_cart"></span>(0)</a></li>
				
			  <?php if(session()->has('cust_id')): ?>
			  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo e(session('name')); ?>..!</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo e(url('profile1')); ?>">profile</a>
				  <!-- <a class="dropdown-item" href="<?php echo e(url('product-single')); ?>">Single Product</a>
                <a class="dropdown-item" href="<?php echo e(url('cart')); ?>">Cart</a>
                <a class="dropdown-item" href="<?php echo e(url('checkout')); ?>">Checkout</a> -->
				<a class="dropdown-item" href="<?php echo e(url('logout1')); ?>">Log Out</a>
              </div>
            </li>
			<?php else: ?>
						
			<li class="nav-item"><a href="<?php echo e(url('login1')); ?>" class="nav-link">Login</a></li>
						<?php endif; ?>

			  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	</body>
</html><?php /**PATH C:\xampp\htdocs\mitasha\laravel\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>