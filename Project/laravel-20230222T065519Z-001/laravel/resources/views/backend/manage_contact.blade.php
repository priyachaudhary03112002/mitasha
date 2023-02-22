@extends('backend.layout.main')

@section('main_section')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Manage contact</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up"> 
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Manage contact</div>

                        <form action="{{url('/manage_contact')}}" method="post">
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
                                        <th> contact Id</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->comment}}</td>
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