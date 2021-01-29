@extends('master')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
        <li data-target="#myCarousel" data-slide-to="11"></li>
        <li data-target="#myCarousel" data-slide-to="12"></li>
        <li data-target="#myCarousel" data-slide-to="13"></li>
        <li data-target="#myCarousel" data-slide-to="14"></li>
    </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}">
                    <div class="carousel-caption slider-text">
                        <h6>{{$item['name']}}</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['gallery']}}">
                    <div class="products-name">
                        <h4>{{$item['name']}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection