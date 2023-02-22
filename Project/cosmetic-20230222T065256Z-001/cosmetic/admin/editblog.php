<?php
  include_once('header.php');
  
?>
  
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Edit Blog Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="#" method="post" enctype="multipart/form-data">
               <div class="col-12">
                  <label for="id"  class="form-label"></label>
                  <input type="hidden"  name="blog_id " class="form-control" id="blog_id">
                </div>

                <div class="col-12">
                  <label for="inputEmail4"  class="form-label">Title</label>
                  <input type="text"  name="title" class="form-control" id="title" value="<?php echo $fetch->title?>">
                </div>
                <div class="col-12">
                  <label for="img" class="form-label">Img</label>
                  <input type="file" name="img" class="form-control" id="img">
                  <img src="image/upload/<?php echo $fetch->img?>" style="width:100px;height:100px" alt="">
                </div>
                <div class="col-12">
                  <label for="description" class="form-label">description</label>
                  <textarea rows="5" cols="12" name="description" class="form-control"><?php echo $fetch->description?></textarea>
                  </div>
                <div class="text-center">
                  <button type="submit"  name="submit" id="submit" class="btn btn-primary">Submit</button>
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