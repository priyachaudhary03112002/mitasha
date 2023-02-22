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
              <h5 class="card-title">Manage Category</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> Category Id</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($category_arr as $data)
                    {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $data->category_id;?></th>
                    <td><?php echo $data->cate_name;?></td>
                    <td><?php echo $data->cate_img;?></td>
                    <td><a href="admin_cate_edit?editbtn=<?php echo $data->category_id ?>" class="btn btn-primary">Edit</a> &nbsp
                    <a href="delete?deletebtn=<?php echo $data->category_id ?>" class="btn btn-danger">Delete</a></td>
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
