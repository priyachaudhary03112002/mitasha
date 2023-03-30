
@extends('backend.layout.main1')

@section('main_section')
<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">login</a>
        </div>
        <form id="login-form" action="{{url('/login')}}" method="post">
        @csrf
            <h2 class="login-title"></h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="email" value="{{old('email')}}"  placeholder="Email" autocomplete="off">
                    @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" value="{{old('password')}}"  placeholder="Password">
                    @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit" name="submit">Login</button>
            </div>
            <div class="social-auth-hr">
                <span>Or login with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
            <div class="text-center">Not a member?
                <a class="color-blue" href="register">Create accaunt</a>
            </div>
        </form>
    </div>
    @endsection
   