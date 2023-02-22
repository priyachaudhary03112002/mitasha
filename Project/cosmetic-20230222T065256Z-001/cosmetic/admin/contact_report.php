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
              <h5 class="card-title">Contact Report</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> Contact Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($contact_arr as $data)
                  {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $data->contact_id ;?></th>
                    <td><?php echo $data->name;?></td>
                    <td><?php echo $data->email;?></td>
                    <td><?php echo $data->comment;?></td>
                    <td><a href="edit.php" class="btn btn-primary">Edit</a> &nbsp
                    <a href="edit.php" class="btn btn-danger">Delete</a></td>
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
