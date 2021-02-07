<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordering System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Optional theme -->
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    * {
        box-sizing: border-box;
    }
    .navbar-default{
        width: 100%;
        background-image: url("https://meirsondermatology.com/wp-content/uploads/2015/01/meirson-header-background.png");
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a:hover{
        color: DeepPink
    }
    .custom-login{
        height: 500px;
        padding-top:100px;
    }

    img.slider-img{
        height: 400px !important;
        margin: 10px auto 20px;
        display: block;
    }
    .title-system img{
        height: 20px;
        margin-right: 5px;
        margin-top: 15px
    }
    .custom-product{
        height: 100vh
    }

    .search-box{
        width: 300px !important;
        background-color: aliceblue;
    }
    .searched-item a{
        text-decoration: none;
        padding: 5px
    }
    .searched-item h4, .searched-item h6{
        text-align: center;
        color: #000
    }

    .carousel-indicators>li{
        background: hotpink;
        border: 2px solid pink;
    }
    .carousel-inner{
        background-color: azure;
    }
    .slider-text{
        background-color: #008eff4f !important;
        width: 180px;
        color: #000;
        left: 60%;
        border-radius: 50%;
    }
    .carousel-control{
        color: blue;
    }

    .trending-wrapper h3, .trending-wrapper-search h3{
        font-size: 30px;
        width: 300px;
        color: #000;
        margin-left: 35%;
        text-align: center;
        background-color: cadetblue !important;
        padding: 20px;
        border-radius: 45%;
    }
    .trending-img, .search-img{
        height: 100px;
        margin: 10px auto 20px;
        display: block;
    }
    .trending-item, .searched-item{
        display: inline-flex;
        width: 20%;
        height: 30%;
        background: none;
        margin: 20px;
        border-radius: 30px 0px 30px 0px;
        border: 2px solid #a23131;
    }
    .trending-item a, .trending-item h4{
        font-size: 15px;
        text-align: center;
        padding: 5px;
        color: #000;
        text-decoration: none
    }

    .detail-page{
        background: url("https://cdn.wallpapersafari.com/78/76/OXavm4.jpg") no-repeat center center/cover;
	    min-height: 100vh;
	    width: 100%;
    }
    .detail-img{
        height: 300px;
        margin: 40px;
        padding: 20px;
        border-radius: 30px;
        border: 2px solid #a23131;
    }
    .detail-text{
        color: black
    }

    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        width: 1000px;
        margin-bottom: 30px;
        padding-bottom: 10px;
        margin-top: 60px;
    }
    .cart-list{
        height: 130px;
        width: 130px;
        padding: 5px;
        margin-right: 50px;
        margin-left: 50px;
        margin-bottom: 20px;
        border-radius: 30px 0 30px 0;
        border: 2px solid #a23131;
    }

    .order-list-devider{
        border-bottom: 1px solid #ccc;
        width: 1000px;
        margin-bottom: 30px;
        padding-bottom: 10px;
        margin-top: 60px;
    }
    .order-list{
        height: 180px;
        width: 180px;
        padding: 5px;
        margin-left: 50px;
        margin-bottom: 20px;
        border-radius: 30px 0 30px 0;
        border: 2px solid #a23131;
    }

    .form-group textarea{
        padding-left: 10px;
    }
    .custom-ordernow{
        margin: 50px;
        font-size: 16px
    }
    
    .form-group {
        display: flex;
        margin-bottom: 15px;
    }
    .icon {
        padding: 12px;
        background: dodgerblue;
        color: white;
        min-width: 40px;
        text-align: center;
    }
    .form-group input{
        width: 80%;
        padding: 10px;
        outline: none;
    }
    .form-control-register, .form-control-add{
        border: 1px solid dodgerblue;
    }
    .btn-reg{
        background-color: dodgerblue;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        width: 25%;
        opacity: 0.9;
    }
    .center-btn{
        text-align: center;
    }
    .btn-reg:hover {
        opacity: 1;
    }

    .btn-one>a:before, .btn-one>a:after{
	    content: '';
	    position: absolute;
        margin: 10px;
	    width: 10px;
	    height: 10px;
	    transition: all 0.3s ease;
    }
    .btn-one>a:before{
	    top: -2.5%;
	    left: -1%;
	    border-top: 2px solid white;
	    border-left: 2px solid white;	
    }
    .btn-one>a:after{
	    bottom: -2.5%;
	    right: -1%;
	    border-bottom: 2px solid white;
	    border-right: 2px solid white;
    }
    .btn-one>a:hover:before, .btn-one>a:hover:after{
	    width: 82%;
	    height: 65%;
	    transition: all 0.3s ease;
    }

    .btn-two>a:before, .btn-two>a:after{
	    content: '';
    	position: absolute;
        margin-bottom: 8px;
    	width: 0%;
    	height: 100%;
	    border-bottom: 2px solid white;
	    transition: width 0.3s ease;
    }
    .btn-two>a:before{
	    bottom: 0;
	    right: 50%;
    }
    .btn-two>a:after{
	    bottom: 0;
	    left: 50%;
    }
    .btn-two>a:hover:after, .btn-two>a:hover:before{
	    width: 35%;
	    transition: width .2s ease;
    }
    .panel-footer {
        text-align: center;
        padding: 10px 15px;
        font-size: 17px;
        font-style: italic;
        color: #fff;
        background-image: url("https://meirsondermatology.com/wp-content/uploads/2015/01/meirson-header-background.png");
    }

</style>
</html>
