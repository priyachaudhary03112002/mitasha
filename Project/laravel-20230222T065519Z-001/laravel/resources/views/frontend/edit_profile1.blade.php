@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span class="mr-2"><a href="index">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread"> Edit Product Single</h1>
          </div>
        </div>
      </div>
    </div>

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
<div class="card p-4"> 
<form action="{{url('editprofile1/'.$data->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <label>Name:</label>
  <input type="text" class="form-control p-4" value="{{$data->name}}" name="name">
  <label>Email:</label>
  <input type="email" class="form-control p-4" value="{{$data->email}}" name="email">
  <label>Username:</label>
  <input type="text" class="form-control p-4" value="{{$data->username}}" name="username">
  <label>Mobile:</label>
  <input type="number" class="form-control p-4" value="{{$data->mobile}}" name="mobile">                                             
  <label>Address:</label>
 <textarea class="form-control p-4" name="address">{{$data->address}}</textarea>
  <label>Gender:</label>
  <?php
	$gender=$data->gender;
	if($gender="Male")
	{
	?>
	Male: <input type="radio" name="gender" value="Male" checked>
	Female: <input type="radio" name="gender" value="Female">
    <?php
	}
	else
	{
	?>			
	Male: <input type="radio" name="gender" value="Male" >
   Female: <input type="radio" name="gender" value="Female" checked>
   <?php
	}
    ?>
    <br>
  <label>Languages:</label>
  <?php
   $lag=$data->lag;
   $lag_arr=explode(",",$lag);
   ?>
	Hindi: <input type="checkbox" name="lag[]" value="Hindi" <?php
	if(in_array("Hindi",$lag_arr))
	{
	  echo "checked";
	}
	?>>
	English: <input type="checkbox" name="lag[]" value="English" <?php
	 if(in_array("English	",$lag_arr))
	{
		echo "checked";
	}
	?>>
	Gujarati: <input type="checkbox" name="lag[]" value="Gujarati" <?php
	if(in_array("Gujarati",$lag_arr))
	{
	  echo "checked";
	}
	?>>
    <br>
  <label>Image:</label>
  <img src="{{url('frontend/images/upload/'.$data->img)}}" width="50px" alt="">
  <input type="file" class="form-control"  name="img">
  

                            
<div class=" d-flex mt-2"> 
<button class="btn1 btn-white" type="submit" name="submit"> Update Profile </a></button> 
</div> 
</div>
</div>
</div>




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
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('frontend/images/compact.jpg')}}" alt="Colorlib Template">
    						<span class="status"></span>
    						<div class="overlay"></div>
    					</a>
		
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Compact</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale"></span></p>
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
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('frontend/images/perfume-product.jpg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Perfume</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span></span></p>
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
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('frontend/images/face3.jpg')}}" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Foundation</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span></span></p>
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
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('frontend/images/lipstick-product.jpg')}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center"> 
    						<h3><a href="#">Matte Lipstick</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span></span></p>
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

    @endsection