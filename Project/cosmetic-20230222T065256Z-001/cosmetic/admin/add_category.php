<?php
  include_once('header.php');
  
?>
  
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Category Form</h1>
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
              <h5 class="card-title">Category Form</h5>

              <!-- Vertical Form -->
              <form  action ="#" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-12">
                  <label for="id" class="form-label"></label>
                  <input type="hidden" class="form-control" id="categorie_id">
                </div>
                <div class="col-12">
                  <label for="name" class="form-label">Category Name</label>
                  <input type="text" name="cate_name" class="form-control" id="cate_name">
                </div>
                <div class="col-12">
                  <label for="image" class="form-label">Category Image</label>
                  <input type="file"  name="cate_img" class="form-control" id="cate_img">
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