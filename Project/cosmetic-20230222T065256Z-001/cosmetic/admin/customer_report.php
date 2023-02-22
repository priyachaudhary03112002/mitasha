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
              <h5 class="card-title">Customer Report</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">customer id </th>
                    <th scope="col">name</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($customer_arr as $data)
                    {
                    ?>
                  <tr>
                    <th scope="row"><?php echo $data->cust_id  ;?></th>
                    <td><?php echo $data->name ;?></td>
                    <td><?php echo $data->username ;?></td>
                    <td><?php echo $data->password ;?></td>
                    <td><?php echo $data->email ;?></td>
                    <td><?php echo $data->mobile ;?></td>
                    <td><?php echo $data->address ;?></td>
                    <td>
                      <a href="edit.php" class="btn btn-primary">Edit</a> 
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
