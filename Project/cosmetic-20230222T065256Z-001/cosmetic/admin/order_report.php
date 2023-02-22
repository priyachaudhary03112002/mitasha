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

              <!-- Default Table -->
              
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Order Report</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> Order Id</th>
                    <th scope="col">Cust Id</th>
                    <th scope="col">Cart Id</th>
                    <th scope="col">Total Amount</th>
                    <th  scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                      foreach($order_arr as $data)
                      {
                      ?>
                  <tr>
                    <td scope="row"><?php echo $data->order_id ;?></td>
                    <td><?php echo $data->cust_id;?></td>
                    <td><?php echo $data->cart_id ;?></td>
                    <td><?php echo $data->total_amount;?></td>
                   <td>
                    <a href="edit.php" class="btn btn-primary">Edit</a> &nbsp   
                    <a href="delete.php" class="btn btn-danger">Delete</a></td>
                  </tr>
                </tbody>
                <?php
                 }
              ?>
              </table>
              <!-- End Bordered Table -->
              </div>
              </div>


            
   
  </main><!-- End #main -->

<?php 
  include_once('footer.php');
 ?>
