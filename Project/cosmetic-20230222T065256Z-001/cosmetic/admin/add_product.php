<?php
  include_once('header.php');
  
?>
  

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="#" method="post" enctype="multipart/form-data">
                  <label for="product_id" class="form-label"></label>
                  <input type="hidden"  name="product_id" class="form-control" id="product_id">

                
                 <div class="col-12">
                  <label for="name" class="form-label">Category  name</label>
                  <select name="category_id" class="form-control">
                    <option value="">select Category</option>
                    <?php
                    foreach($category as $c)
                    {
                    ?>
                    <option value="<?php echo $c->category_id ?>">
                            <?php echo $c->cate_name?>
                    </option>
                    <?php   
                    }
                    ?>
                  </select>
                </div>

                <div class="col-12">
                  <label for="name" class="form-label">Product name</label>
                  <input type="text" name="prod_name" class="form-control" id="prod_name">
                </div>
                <div class="col-12">
                  <label for="pmainprice" class="form-label">Product mainprice</label>
                  <input type="text"  name="prod_mainprice" class="form-control" id="prod_mainprice">
                </div>
                <div class="col-12">
                  <label for="discount price" class="form-label">Product discount price</label>
                  <input type="text" name="prod_discprice" class="form-control" id="prod_discprice">
                </div>
                  <div class="col-12">
                  <label for="image" class="form-label">Product image</label>
                  <input type="file" name="prod_img" class="form-control" id="prod_img">
                </div>
                 

                  <div class="col-12">
                  <label for="description" class="form-label">Product description</label>
                 <textarea rows="5" name="prod_desc" class="form-control" cols="12"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" name="reset" id="reset" class="btn btn-secondary">Reset</button>
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