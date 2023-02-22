<?php 
  include_once('header.php');
 
 
 ?>
 
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>List Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
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
              <h5 class="card-title"></h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Blog Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Img</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   foreach($blog_arr as $data)
                  {
                ?>
                  <tr>
                    <th scope="row"><?php  echo $data->blog_id;?></th>
                    <td><?php  echo $data->title;?></td>
                    <td><?php  echo $data->img;?></td>
                    <td><?php  echo $data->description;?></td>
                    <td><a href="editblog?editblogbtn=<?php echo $data->blog_id ?>" class="btn btn-primary">Edit</a> &nbsp
                    <a href="deleteblog?deleteblogbtn=<?php echo $data->blog_id ?>" class="btn btn-danger">Delete</a></td>
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
