<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="title-system"><img src="https://fuse-avon-assets.s3.amazonaws.com/file-host/eea6bd35-4ed1-4db7-a6e3-5a992523d07d-1181427552335971722-/4/logo-gradient.png"></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="btn-one"><a href="/"><i class="fa fa-home"></i> HOME</a></li>
        <li class="btn-one"><a href="/myorders"><i class="fa fa-shopping-bag"></i> PURCHASE</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-fw fa-search"></i> Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="btn-two"><a href="/cartlist"><i class="fa fa-cart-plus"></i> ({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="btn-two">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </li>
        @else
        <li class="btn-two"><a href="/login"><i class="fa fa-user-circle"></i> Login</a></li>
        <li class="btn-two"><a href="/register"><i class="fa fa-user-plus"></i> Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
