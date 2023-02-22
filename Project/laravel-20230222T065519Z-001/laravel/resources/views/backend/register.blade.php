@extends('backend.layout.main1')

@section('main_section')

<body class="bg-silver-300">
@include('sweetalert::alert')
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">register</a>
        </div>
        <form id="register-form" action="{{url('/register')}}" method="post">
            @csrf
            <h2 class="login-title"></h2>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{old('name')}}" name="name" placeholder="Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{old('username')}}" name="username" placeholder="UserName">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email" autocomplete="off">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" value="{{old('password')}}" name="password" placeholder="Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="submit">Sign up</button>
            </div>
            <div class="social-auth-hr">
                <span>Or Sign up with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
            <div class="text-center">Already a member?
                <a class="color-blue" href="login">Login here</a>
            </div>
            </div>
        </form>
    </div>
    @endsection
