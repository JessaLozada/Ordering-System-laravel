@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="login" method="POST">
                <div class="form-group">
                        @csrf
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" name="email" class="form-control-register" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="password" class="form-control-register" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="center-btn">
                    <button type="submit" class="btn-reg">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection