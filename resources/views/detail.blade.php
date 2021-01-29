@extends('master')
@section("content")
<div class="container detail-page">
    <div clas="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="" style="background: none">
        </div>
        <div class="col-sm-6 detail-text" style="margin-top: 40px">
            <h2>{{$product['name']}}</h2>
            <h4><b>Price</b> : {{$product['price']}}</h4>
            <h4><b>Details</b> : {{$product['description']}}</h4>
            <h4><b>Category</b> : {{$product['category']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-info">Add to Cart</button>
            </form>
            <br>
            <a href="/" class="btn btn-success">Go Back</a>
        </div>
    </div>
</div>
@endsection