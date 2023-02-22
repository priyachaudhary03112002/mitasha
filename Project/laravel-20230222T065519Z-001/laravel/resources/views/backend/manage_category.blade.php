@extends('backend.layout.main')

@section('main_section')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Manage Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up"> 
                <div class="ibox">     
                    <div class="ibox-head">
                        <div class="ibox-title">Manage Category</div>
                        <form action="{{url('/manage_category')}}" method="post">
                            @csrf
                        <div class="input-group">
                          <input type="search" name="search"  value="{{$search}}" class="form-control"  placeholder="search">
                          <div class="input-group-btn">
                            <button  type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>

                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                       
                                <thead>
                                    <tr>
                                        <th> Category Id</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>                      
                                 </thead>
                                <tbody>
                                <?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->cate_name}}</td>
                                    <td><img src="{{url('backend/assets/img/upload/'.$d->cate_img)}}" width="50px"></td>
                                    <td>
                                    <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i> 
                                            <a href="edit_category/{{$d->id}}"> Edit</a>
                                        </button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i> 
                                            <a href="delete_category/{{$d->id}}"> Delete</a> 
                                        </button>
 
                                    </td>
									
                                </tr>
                            <?php
							}
							?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                

</html>
@endsection