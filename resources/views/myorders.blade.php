@extends('master')
@section("content")
<div class="custom-product purchase-page">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>PURCHASE</h3>
            @foreach($orders as $item)
                <div class="row searched-item order-list-devider">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="order-list" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div>
                        <div class="purchase">
                            <h2>{{$item->name}}</h2>
                            <h4><b>Delivery Status</b> : {{$item->status}}</h4>
                            <h4><b>Address</b> : {{$item->address}}</h4>
                            <h4><b>Payment Status</b> : {{$item->payment_status}}</h4>
                            <h4><b>Payment Method</b> : {{$item->payment_method}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection