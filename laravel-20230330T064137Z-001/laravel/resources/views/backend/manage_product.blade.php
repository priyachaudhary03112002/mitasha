@extends('backend.layout.main')


@section('main_section')

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Manage product</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up"> 
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Manage Product</div>
                        <form action="{{url('/manage_product')}}" method="post">
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
                                        <th>Product Id</th>
                                        <th>Category Name</th>
                                        <th>Product Name</th>
                                        <th>Short Description</th>
                                        <th>Long Description</th>
                                        <th>Main Price</th>
                                        <th>discount Price</th>
                                        <th>Main image</th>
                                        <th>Multiple image</th>
                                        <th>status</th>
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
                                        <td>{{$d->prod_name}}</td>
                                        <td>{{$d->short_desc}}</td>
                                        <td>{{$d->long_disc}}</td>
                                        <td>{{$d->mainprice}}</td>
                                        <td>{{$d->discprice}}</td>
                                        <td><img src="{{url('backend/assets/img/upload/product/'.$d->img)}}" width="30px"></td>
                                        <td>
                                            <?php
                                            $multiple_img=$d->multiple_img;
                                            $arr_img=explode(',',$multiple_img);
                                            ?>
                            @foreach($arr_img as $multiple_img)                
                                <img src="{{url('backend/assets/img/upload/product/'.$multiple_img)}}" width="20px">          
                            @endforeach
                            </td> 
                            <td>
                            @if($d->status=="Stock")
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-outline-success btn-xs btn-rounded">{{$d->status}}</a></td>
                            @elseif($d->status=="Out of stock")
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-outline-danger btn-xs btn-rounded">{{$d->status}}</a></td>
                            @endif 
                                                 
                            <td>
                            <a href="edit_product/{{$d->id}}" class="btn btn-success btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i>  Edit</a>
                        <a href="delete_product/{{$d->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i> Delete</a> 
                                        
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
 