<?php
  include_once('header.php');
  
?>
  
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Edit Product Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Edit Product Form</h5>

              <!-- Vertical Form -->
              <form  action ="#" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-12">
                  <label for="id" class="form-label"></label>
                  <input type="hidden" class="form-control" id="product_id">
                </div>

                
                <div class="col-12">
                  <label for="name" class="form-label">Category  name</label>
                  <select name="category_id" class="form-control "  required="required">
                    <option value="">Select Category</option>
                    <?php
                    foreach($category as $c)
                    {
                      if($c->category_id ==$fetch->category_id)
                      {
                    ?>
                      <option value="<?php echo $c->category_id?>" selected>
                              <?php echo $c->cate_name?>
                      </option>
                    <?php   
                      }
                      else
                      {
                    ?>
                      <option value="<?php echo $c->category_id?>">
                              <?php echo $c->cate_name?>
                      </option>
                    <?php                   
                      }
                    }
                    ?>
                  </select>
                </div>
                <div class="col-12">
                  <label for="name" class="form-label">product Name</label>
                  <input type="text" name="prod_name" class="form-control" id="prod_name" value="<?php echo $fetch->prod_name?>">
                </div>
                <div class="col-12">
                  <label for="name" class="form-label">product Main Price</label>
                  <input type="text" name="prod_mainprice" class="form-control" id="prod_mainprice" value="<?php echo $fetch->prod_mainprice?>">
                </div>
                <div class="col-12">
                  <label for="name" class="form-label">product discount price</label>
                  <input type="text" name="prod_discprice" class="form-control" id="prod_discprice" value="<?php echo $fetch->prod_discprice?>">
                </div>
                <div class="col-12">
                  <label for="image" class="form-label">product Image</label>
                  <input type="file"  name="prod_img" class="form-control" id="prod_img">
                  <img src="image/upload/<?php echo $fetch->prod_img?>" style="width:100px;height:100px" alt="">
                </div>
                <div class="col-12">
                  <label for="name" class="form-label">product descprition</label>
                  <input type="text" name="prod_desc" class="form-control" id="prod_desc" value="<?php echo $fetch->prod_desc ?>">
                </div> 

                <div class="text-center">
                  <button type="submit" name="submit"  id="submit" class="btn btn-primary">Submit</button>
                  <button type="reset"  name="reset" id="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

             
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php
  include_once('footer.php');
?>