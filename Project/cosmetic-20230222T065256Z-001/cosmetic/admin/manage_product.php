<?php 
  include_once('header.php');
 
 
 ?>
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>List Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Manage Product</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Category Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Mainprice</th>
                    <th scope="col">Product discount price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product description</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($product_arr as $data)
                  {
              ?>
                  <tr>
                    <th scope="row"><?php  echo $data->product_id;?></th>
                    <td><?php  echo $data->category_id;?></td>
                    <td><?php  echo $data->prod_name;?></td>
                    <td><?php  echo $data->prod_mainprice;?></td>
                    <td><?php  echo $data->prod_discprice;?></td>
                    <td><?php  echo $data->prod_img;?></td>
                    <td><?php  echo $data->prod_desc;?></td>
                     <td><a href="editproduct?btnproduct=<?php echo $data->product_id ?>" class="btn btn-primary">Edit</a> &nbsp
                    <a href="deleteproduct?delete_btn_product=<?php echo $data->product_id ?>" class="btn btn-danger">Delete</a></td>

                  </tr>
                 </tbody>
                 <?php
                  }
                ?>
              </table>
              <!-- End Bordered Table -->

            
    </section>

  </main><!-- End #main -->
<?php 
  include_once('footer.php');
 ?>
