@extends('mainlayout')
@section('page-level-css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="" class="mt-5 border p-4 bg-light shadow">
                    <h4 class="mb-5 text-secondary">Register</h4>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="Lname" class="form-control" placeholder=" Enter Email">
                        </div>

                        <div class="col-md-6">
                            <label>Contact number<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Contact number">
                        </div>


                        <div class="col-md-6">
                            <label>Occupation<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Occupation">
                        </div>

                        <div class="col-md-6">
                            <label>Company<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Company">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Address<span class="text-danger">*</span></label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-primary float-end">Signup Now</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="{{ route('login') }}" >Login Now</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
