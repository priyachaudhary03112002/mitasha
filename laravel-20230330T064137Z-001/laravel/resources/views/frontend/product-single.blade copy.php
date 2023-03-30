@extends('frontend.layout.main')

@section('main_section')

<div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back3.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>
	<form action="{{url('product-single/'.$product_data->id)}}" method="post">
				@csrf
      <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="{{url('backend/assets/img/upload/product/'.$product_data->img)}}" class="image-popup"><img src="{{url('backend/assets/img/upload/product/'.$product_data->img)}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
			     
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$product_data->prod_name}}</h3>
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
    				<p class="price"><h5><span style="color: #bbb;">MRP:<del>₹{{$product_data->mainprice}}</del></span>
					<span>₹{{$product_data->discprice}}</span></p></h5>
					<b>Short Description</b><br>
    				<p>{{$product_data->short_desc}}
						</p>
			    <div class="row mt-4">
						<b>Product Description</b><br>
						<p id="main">{{$product_data->long_disc}}</p>
						
						<a href="#"  id="show">Read More</a>
						<a href="#" id="hide" style="display: none;">Read less</a>

						<input type="hidden" name="cust_id" value= "{{session('cust_id')}}">
				 <input type="hidden" name="prod_id" value="{{$product_data->id}}">

					
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

					<form action="{{url('product-single/'.$product_data->id)}}" method="post"> 
						@csrf                          
                   
							<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
	             	<!-- <span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span> -->
						<input type="hidden" name="id" value="{{$product_data->id}}">
	             	<input type="number" name="qty" class="form-control input-number" value="1" min="1" max="100">
	             	<!-- <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
					 </span> -->
					 &nbsp; 
			          <input type="submit" name="submit" value="update"> 
					 </form>
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
@foreach($arr_img as $multiple_img)                
<a href="{{url('backend/assets/img/upload/product/'.$multiple_img)}}" class="image-popup"><img src="{{url('backend/assets/img/upload/product/'.$multiple_img)}}" width="100"></a> 
	@endforeach	         
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