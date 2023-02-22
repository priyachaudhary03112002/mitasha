@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Page</span></p>
            <h1 class="mb-0 bread">Register</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<!-- <div class="row d-flex mb-5 contact-info"> -->          
          
        <div class="row block-9">
          <div class="col-md-2">
</div>
          <div class="col-md-8 order-md-last d-flex">
            <form action="{{url('/registration')}}" class="bg-white p-5 contact-form" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" value="{{old('name')}}"    class="form-control" placeholder="Your Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>            
              <div class="form-group">
                <input type="text" name="email" value="{{old('email')}}"    class="form-control" placeholder="Your Email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <input type="password" name="password"  value="{{old('password')}}"   class="form-control" placeholder="Your Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div> 
              
              <div class="form-group">
              <input type="submit" value="Submit" name="submit" class="btn btn-primary py-2 px-4">
              </div>
              <div class=" form-group">
                 <a href="login1">CLICK HERE FOR LOGIN</a>
              </div>
            </form>
          
          </div>

          <!-- <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>

    @endsection