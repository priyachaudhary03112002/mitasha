@extends('frontend.layout.main')

@section('main_section')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Profile Page</h1>
                <a href="index.html">Home</a> <span>|</span> <a href="contact.html">patients - Appointments Form</a>
            </div>
        </div>
    </div>
</section>
<!-- Map Area Starts -->
<section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="section-top text-center">
                        <h2>Profile Form</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                    <div class="col-lg-12">
                    <div>
                        <h3 class="mb-5">Profile now</h3>
                              </div>
                              <span class="mt-3"><b>Name:</b>{{$data->name}}</span> <br>
                              <span class="id"><b>Email</b>:{{$data->email}}</span>  <br>
                              <div class=" d-flex mt-2"> 
<button class="btn1 btn-white"><a href="edit_profile/{{$data->id}}"> Edit Profile </a></button> 
</div>  
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
   
   
    <!-- Contact Form End -->

    @endsection