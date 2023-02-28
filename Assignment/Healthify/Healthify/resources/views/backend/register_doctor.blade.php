@extends('backend.layout.main1')

@section('main_section1')
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="{{url('/register_doctor')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1"> Doctor Registrations Form</h3>
                <p>Please enter your Doctor information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name"  placeholder=" Enter Name">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email"  placeholder=" Enter E-mail">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password"  placeholder=" Enter Password">
                </div>
             
                <div class="form-group">
                    <input class="form-control form-control-lg"  type="text" name="description" placeholder=" Enter description">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg"  type="number" name="mobile" placeholder=" Enter Mobile-number">
                </div>
                <div class="form-group">
                    <textarea name="address" rols="10" cols="15" class="form-control form-control-lg" placeholder=" Enter address"></textarea>
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"  type="file" name="img">
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"  type="text" name="degree" placeholder=" Enter degree">
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"  type="text" name="city" placeholder=" Enter city">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary"  name="submit" type="submit">Register My Account</button>
                </div>

                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{url('/login_doctor')}}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>
@endsection