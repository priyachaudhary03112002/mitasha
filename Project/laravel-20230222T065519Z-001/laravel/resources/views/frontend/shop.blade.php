@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back3.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Skin</a></li>
    					<li><a href="#">Nails</a></li>
    					<li><a href="#">Spa</a></li>
    					<li><a href="#">Makeup</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
			  <?php
			 foreach($data as $d) 
			 {
			  ?>  
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{url('product-single/'.$d->id)}}" class="img-prod"><img class="img-fluid" src="{{url('backend/assets/img/upload/product/'.$d->img)}}"  alt="Colorlib Template">
						@if($d->status=="Out of stock")	
    						<span class="status" id="stock">{{$d->status}}</span>
					      @endif
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$d->prod_name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span>
									<span class="price-sale">₹{{$d->mainprice}}</span></p>
		    					</div>
	    					</div>
	     					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<!-- <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu" style="color:white;"></i></span>
	    							</a> -->
									<form action="{{url('shop/'.$d->id)}}" method="post">
				                  @csrf
								  <input type="hidden" name="cust_id" value= "{{session('cust_id')}}">
				                 <input type="hidden" name="prod_id" value="{{$d->id}}">
								 <input type="hidden" name="qty" value="1">
								 <div class="m-auto d-flex">
	    							<a href="{{url('cart/'.$d->id)}}"><button type="submit"  class="cartbtn"><i class="ion-ios-cart"></i></button></a>&nbsp;
									<a href="{{url('wishlist/'.$d->id)}}"><button type="submit"  class="cartbtn"><i class="ion-ios-heart"></i></button></a>
			 </div>
<!--                                   
	    							<a href="#" class="heart d-flex justify-content-center align-items-center">
	    								<span><i class="ion-ios-heart" style="color:white;"></i></span>
	    							</a> -->
			                         </form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php } ?>
    		</div>
    	</div>
     </div>
				
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
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