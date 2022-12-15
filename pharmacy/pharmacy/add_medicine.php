<?php
  include_once('header.php');
?>
  
     
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Medicine </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Medicine</h4>
                    <form  action="#" method="post" id="first_form">
                      <div class="form-group">
                        <label for="exampleInputName1"> Medicine Name</label>
                        <input type="text" class="form-control" name="medicine_name" placeholder=" Medicine Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">qty</label>
                        <input type="number" class="form-control" name="qty" placeholder="qty">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">price</label>
                        <input type="text" class="form-control" name="price" placeholder="price">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword4">add_date</label>
                        <input type="date" class="form-control" name="add_date" placeholder="add date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">add_by</label>
                        <input type="number" class="form-control" name="add_by" placeholder="add by">
                      </div>
                      <button type="submit"  name="submit"class="btn btn-primary mr-2" onclick="return myFunction();" value="submit">Submit</button>
                      <button class="btn btn-light" name="reset">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <script>
    function myFunction(){
      if(confirm("Are you sure yes or no")){
        return true;
      }else{
        return false;
      }
    }
    </script>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
  <?php
    include_once('footer.php');
  ?>     