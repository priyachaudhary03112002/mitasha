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
                    <form  action="#" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1"> Medicine Name</label>
                        <input type="text" class="form-control" name="medicine_name"  value="<?php echo $fetch->medicine_name ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">qty</label>
                        <input type="number" class="form-control" name="qty" value="<?php echo $fetch->qty?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $fetch->price?>">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword4">add_date</label>
                        <input type="date" class="form-control" name="add_date" value="<?php echo $fetch->add_date?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">add_by</label>
                        <input type="number" class="form-control" name="add_by" value="<?php echo $fetch->add_by?>">
                      </div>
                      <button type="submit"  name="submit"class="btn btn-primary mr-2" onclick="return editbtn();">Submit</button>
                      <button class="btn btn-light" name="reset" name="submit">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <script>
    function editbtn(){
      if(confirm("Are you sure  medicine update yes or no")){
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