@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							@php
							$sum=0;
							@endphp	
								@foreach($fetch as $d)
						      <tr class="text-center">
						        <td class="product-remove"><a href="{{url('cart/'.$d->id)}}"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod">
								<img class="img-fluid" src="{{url('backend/assets/img/upload/product/'.$d->img)}}" width="100px">
								</td>								
								    <td class="product-name">
						        	<h3></h3>
						        	<p>{{$d->prod_name}}</p>
						        </td>
						        
						        <td class="price">₹{{$d->discprice}}</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
									<!-- <form action="{{url('cart/'.$d->id)}}" method="post" class="subscribe-form">
										@csrf
										<div class="form-group d-flex">
                                     <input type="hidden" name="id" value="{{$d->id}}">  -->
					             	<input type="text" name="qty" class="quantity form-control input-number" value="{{$d->qty}}" min="1" max="100">
									 <!-- <input type="submit" value="update" value="update" class="submit px-3">       
									</form> -->
</div>
					          	</div>
					          </td>
						        <td class="total">₹<?php
								$total=$d->discprice*$d->qty;
								echo $total;
								
								$sum+=$total;
								?>
								</td>
						      </tr><!-- END TR-->
							 
							  @endforeach 
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
			

    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>₹{{$sum}}</span>
    					</p>
    					<!-- <p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p> -->
    					<!-- <p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p> -->
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>₹{{$sum}}</span>
    					</p>
    				</div>
    				<p><a href="checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
				
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