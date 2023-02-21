@extends('backend.layout.main')

@section('main_section')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Employee Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">Employee Id</th>
                      <th>First Name</th>
                      <th>email</th>
                      <th>mobile</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($fetch as $data)
                    <tr>
                    <td>{{$data->id}}</td>
                      <td>{{$data->fname}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->mobile}}</td>
                      <td>{{$data->address}}</td>
                      <td>{{$data->date}}</td>
                      <td><button class="btn btn-default btn-xs m-r-5">
                      <a href="edit_emp/{{$data->id}}">Edit</a>
                    </button>
                    <button class="btn btn-default btn-xs m-r-5">
                    <a href="delete/{{$data->id}}">Delete</a>
                    </button>
                  </td>
                    </tr>
                   @endforeach
          
							</tr>
            
								
								{{ $fetch->links() }}

						
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                         </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
 