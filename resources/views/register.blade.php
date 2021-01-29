@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <i class="fa fa-id-card icon"></i>
                    <input type="number" name="idnumber" class="form-control-add" id="exampleInputid1" placeholder="Id Number" required style="width: 33%; margin-right: 5%">
                    <i class="fa fa-user icon"></i>
                    <input type="text" name="name" class="form-control-add" id="exampleInputname1" placeholder="Username" required style="width: 33%">
                </div>
                <div class="form-group">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" name="email" class="form-control-register" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="password" class="form-control-register" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="center-btn">
                    <button type="submit" class="btn-reg">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection