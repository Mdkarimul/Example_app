@extends("master")


@section("login-css")

<link rel="stylesheet" href="css/login.css">
@endsection


@section("contents")
<div class="container p-4">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mt-4 bg-light p-4">
     <center>
        <img class="d-flex justify-content-center align-items-center" src='images/login.webp' width="10%" height="" style="">
</center>
        <form  action="/customlogin" method="post">
            @csrf
                <h3 class="text-center">Login</h3>
                <div class="form-group">
                    <label>User name</label>
                    <input require type="email" name="email" placeholder="Email" class="remove-focus form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input require type="password" name="password" placeholder="Password" class="remove-focus form-control">
                </div>

                
                    
                    <input type="submit"   class="remove-focus form-control bg-primary text-white border-1">
            
            </from>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection