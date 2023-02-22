<?php
include_once('header1.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Register Page</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Register</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Register Page</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-6 offset-3 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  action="#" method="post"  enctype="multipart/form-data">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div> 

                         <div class="control-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your user Name"
                                required="required" data-validation-required-message="Please enter your user name" />
                            <p class="help-block text-danger"></p>
                        </div> 

                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div> 

                        <div class="control-group">
                            <input type="password" class="form-control" id="password"  name="password"placeholder="Password"
                                required="required" data-validation-required-message="Please enter a password" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <input type="file" name="img" id="img" class="form-control">
                        </div><br>

                        <div class="control-group">
                            <textarea class="form-control" rows="6"  name="address" id="address" placeholder="Address"
                                required="required"
                                data-validation-required-message="Please enter your Address"></textarea>
                               <p class="help-block text-danger"></p>
                        </div>
                         
                        

                           <div class="control-group">
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Your number"
                                required="required" data-validation-required-message="Please enter your user name" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                        <label for="gender" class="form-label">gender</label><br>
                        <input type="radio" name="gender"   id="gender" value="male" checked> male
                        <input type="radio" name="gender" id="gender" value="female"> female
                        <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                        <label for="gender" class="form-label">checkbox</label><br>
                         <input type="checkbox" name="lag[]"  id="gujarati" value="gujarati"> gujarati
                         <input type="checkbox" name="lag[]" id="hindi" value="hindi"> hindi
                         <input type="checkbox" name="lag[]" id="english" value="english"> english
                        <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Contact End -->


<?php

include_once('footer.php');
?>