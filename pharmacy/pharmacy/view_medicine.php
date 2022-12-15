<?php
 include_once('header.php');
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> View Medicine </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Medicine</h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Medicine Id</th>
                          <th>Medicine Name</th>
                          <th>qty</th>
                          <th>price</th>
                          <th>add date</th>
                          <th>add by</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                          foreach($medi_arr as $data)
                        {
                       ?>
                        <tr>
                          <td cope="row"><?php echo $data->med_id;?></td>
                          <td><?php echo $data->medicine_name;?></td>
                          <td><?php echo $data->qty;?></td>
                           <td><?php echo $data->price;?></td>
                          <td><?php echo $data->add_date;?></td>
                           <td><?php echo $data->add_by;?></td>
                           <td>
                            <a href="medicine_edit?editmedicine=<?php echo $data->med_id?>" class="btn btn-primary" name="submit">Edit</a> &nbsp
                            <a href="medicine_delete?deletemedicine=<?php echo $data->med_id?>" class="btn btn-danger">Delete</a> 
                          </td>

                        </tr> 
                      </tbody>
                      <?php
                    }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                
              </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<?php
 include_once('footer.php');
?>          