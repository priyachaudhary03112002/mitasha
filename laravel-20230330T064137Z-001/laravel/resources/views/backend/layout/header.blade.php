
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('backend/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{url('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{url('backend/assets/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar">
    @include('sweetalert::alert') 
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index">
                    <span class="brand">Admin
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
              
                
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{url('backend/assets/img/admin-avatar.png')}}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"></div> {{session('name')}} <br>
                        <small>Admin panel </small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_category">Add Category</a>
                            </li>
                            <li>
                                <a href="manage_category">Manage  Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Product</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_product">Add Product</a>
                            </li>
                            <li>
                                <a href="manage_product">Manage Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_blog">Add Blog</a>
                            </li>
                            <li>
                                <a href="manage_blog">Manage Blog</a>
                            </li>
                        </ul>
                    </li>
               
                    <!-- <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            </li>
                            <li>
                                <a href="#">Login</a>
                            </li>
                            <li>
                                <a href="register">Register</a>
                            </li> 
                        </ul>
                    </li> -->
                    <!-- <li> 
                        <a href="login"><span class="nav-label">
                        <i class="sidebar-item-icon fa fa-table"></i>Login</span>
                        </a>
                    </li> -->
                    <li> 
                        <a href="manage_contact"><span class="nav-label">
                        <i class="sidebar-item-icon fa fa-table"></i>Manage Contact</span>
                        </a>
                    </li>
                    <li> 
                        <a href="manage_cart"><span class="nav-label">
                        <i class="sidebar-item-icon fa fa-table"></i>Manage Cart Report</span>
                        </a>
                    </li>
                    <li> 
                        <a href="manage_contact"><span class="nav-label">
                        <i class="sidebar-item-icon fa fa-table"></i>Manage Order Report</span>
                        </a>
                    </li>
              
                    @if(session()->has('id'))
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Welcome {{session('name')}}</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="#"><i class="fa fa-user"></i>  profile</a>
                            </li>
                           
                        </ul>    
                </li>
                <li> 
                <a href="logout" <?php ('logout')?>><span class="nav-label">
                <i class="fa fa-power-off"></i>   Logout</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->