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
                      

                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                       
                                <thead>
                                    <tr>
                                        <th> Cart Id</th>
                                        <th>Product Name</th>
                                        <th>Customer Name</th>
                                        <th>Qty</th>
                                    </tr>                      
                                 </thead>
                                <tbody>
                                <?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->prod_name}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->qty}}</td>
                                   
									
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