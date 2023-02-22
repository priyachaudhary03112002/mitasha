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

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cart Report</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> Cart Id</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($cart_arr as $data)
                    {
                    ?>
                  <tr>
                    <th scope="row"><?php echo $data->cart_id;?></th>
                    <td><?php echo $data->product_id;?></td>
                    <td><?php echo $data->qty;?></td>
                    <td>
                    <a href="edit.php" class="btn btn-primary">Edit</a> &nbsp 
                    <a href="edit.php" class="btn btn-danger">Delete</a></td>
                  </tr>
                </tbody>
              <?php } ?>
              </table>
              <!-- End Bordered Table -->
             </div>
           </div>
            
   

  </main><!-- End #main -->
<?php 
  include_once('footer.php');
 ?>
