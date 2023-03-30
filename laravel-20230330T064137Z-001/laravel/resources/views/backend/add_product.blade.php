
@extends('backend.layout.main')

@section('main_section')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Add product</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                  
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add product</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{url('/add_product')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                        <select name="cate_id" class="form-control"  required="required">
										<option value="">Select category</option>
										<?php
										foreach($fetch as $c)
										{
										?>
										<option value="<?php echo $c->id?>">
														<?php echo $c->cate_name?>
										</option>
										<?php		
										}
										?>
									</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">product name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text"  value="{{old('prod_name')}}"  name="prod_name">
                                            @error('prod_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">short description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{old('short_desc')}}"   name="short_desc">
                                            @error('short_desc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long description</label>
                                        <div class="col-sm-10">
                                            <textarea name="long_disc"  class="form-control" rols="10" cols="15">{{old('long_disc')}}</textarea>
                                            @error('long_disc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">main price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"  value="{{old('mainprice')}}"  name="mainprice">
                                            @error('mainprice')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">discount price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" value="{{old('discprice')}}"  name="discprice">
                                            @error('discprice')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">main image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file"  name="img">
                                            @error('img')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Multiple image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file"  name="multiple_img[]" multiple />
                                             @error('multiple_img')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           
            <!-- END PAGE CONTENT-->
          
       
 
</body>

</html>
@endsection