<?php
include_once('header1.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Edit Profile Page</h1>
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
            <h2 class="section-title px-5"><span class="px-2">Edit Profile Page</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-6 offset-3 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  action="#" method="post"  enctype="multipart/form-data">
                        <div class="control-group">
                             <label for="Name" class="form-label">Name</label><br>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" / value="<?php echo $fetch->name?>">
                            <p class="help-block text-danger"></p>
                        </div> 

                         <div class="control-group">
                             <label for="username" class="form-label">Username</label><br>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your user Name" readonly 
                                required="required" data-validation-required-message="Please enter your user name" / value="<?php echo $fetch->username?>">
                            <p class="help-block text-danger"></p>
                        </div> 

                        <div class="control-group">
                             <label for="email" class="form-label">email</label><br>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" readonly
                                required="required" data-validation-required-message="Please enter your email" / value="<?php echo $fetch->email?>">
                            <p class="help-block text-danger"></p>
                        </div> 

                       
                        <div class="control-group">
                             <label for="image" class="form-label">Image</label><br>
                            <input type="file" name="img" id="img" class="form-control">
                            <img src="upload/<?php echo $fetch->img?>" style="width:50px;height:50px" alt="">
                        </div><br>

                        <div class="control-group">
                             <label for="address" class="form-label">Address</label><br>
                            <textarea class="form-control" rows="6"  name="address" id="address"><?php echo $fetch->address?></textarea>
                               <p class="help-block text-danger"></p>
                        </div>
                         
                        

                           <div class="control-group">
                             <label for="number" class="form-label">Mobile number</label><br>
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Your number"
                                required="required" data-validation-required-message="Please enter your  number" / value="<?php echo $fetch->mobile?>">
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                        <label for="gender" class="form-label">gender</label><br>
                        <input type="radio" name="gender"   id="gender" value="male" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="male")
                                    {
                                        echo "checked";
                                    }
                                    ?>> male
                        <input type="radio" name="gender" id="gender" value="female" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="female")
                                    {
                                        echo "checked";
                                    }
                                    ?>> female </p>
                        </div>

                        <div class="control-group">
                        <label for="gender" class="form-label">checkbox</label><br>
                         <input type="checkbox" name="lag[]"  id="gujarati" value="gujarati" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("gujarati",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>> gujarati
                         <input type="checkbox" name="lag[]" id="hindi" value="hindi" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("hindi",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>> hindi
                         <input type="checkbox" name="lag[]" id="english" value="english" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("english",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>> english
                        <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="submit">Save</button>
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