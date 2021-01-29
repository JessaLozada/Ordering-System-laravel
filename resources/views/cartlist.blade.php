@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper cart-page">
            <h3>Shopping Cart</h3>
            @foreach($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3 cart-list">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-6">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                    </div>
                    <div class="col-sm-1">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Remove</a><br><br>
                        <a class="btn btn-success" href="ordernow">Check Out</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection