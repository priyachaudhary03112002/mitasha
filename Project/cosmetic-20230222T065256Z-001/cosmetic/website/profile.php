<?php
include_once('header1.php');

?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">profile Page</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">profile</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">profile Page</span></h2>
        </div>  
        <div class="row px-xl-5">
            <div class="col-lg-6 offset-3 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="#" method="post">
                        <div class="control-group offset-3 mb-5">
                            <img src="upload/<?php echo $fetch->img?>"  style="width: 400px;height:400px;"><br>
                            <p class="pt-2">Name: <?php echo $fetch->name?></p>
                            <p class="pt-2">username: <?php echo $fetch->username?></p>
                            <p class="pt-2">email: <?php echo $fetch->email?></p>
                            <p class="pt-2">mobile: <?php echo $fetch->mobile?></p>
                            <p class="pt-2">address: <?php echo $fetch->address?></p>
                            <p class="pt-2">gender: <?php echo $fetch->gender?></p>
                            <p class="pt-2">lag: <?php echo $fetch->lag?></p>

                        </div>
                      <!--   <div class="control-group">
                            <input type="email"  name="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password"
                                required="required" data-validation-required-message="Please enter a password" />
                            <p class="help-block text-danger"></p>
                        </div>
                       -->  <div>
                            <button class="btn btn-success offset-3 mb-5" name="edit" type="submit" id="edit"><a href="editprofile?btncust_id=<?php echo $fetch->cust_id?>">Edit</a></button>
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