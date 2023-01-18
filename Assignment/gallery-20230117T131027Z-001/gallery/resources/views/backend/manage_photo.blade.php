@extends('backend.layout.main')

@section('main_section')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>image</th>
              <th>multiple image</th>
            </tr>
          </thead>
          
          <tbody class="table-border-bottom-0">
          <?php
             foreach($fetch as $d)
             {
             $multi_img=$d->multi_img;
             $multi_img_arr=explode(',',$multi_img);
             
          ?>
            <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->name}}</td>
              <td><img src="{{url('backend/assets/img/upload/'.$d->img)}}" width="50px"></td>
              <td>
                 @foreach($multi_img_arr as $multi_img)
                <img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="50px">
                 @endforeach
           </td>

            </tr>
          </tbody>
          <?php } ?>
        </table>
      </div>
    </div>
    @endsection
