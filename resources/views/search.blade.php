@extends('master')
@section("content")
    <div class="trending-wrapper-search">
        <h3>Results for Products</h3>
        @foreach($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img class="search-img" src="{{$item['gallery']}}">
                    <div class="search-name">
                        <h4>{{$item['name']}}</h4>
                        <h6>{{$item['description']}}</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection