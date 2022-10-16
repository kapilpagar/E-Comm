@extends('master')
@section('content')

<!-- -----------*** Carts ***  -->
<div class="container custon-product">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <div class="text-center bg-warning">
                <br>
                <h3>My Orders</h3>
                <br>
            </div><br><br>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-6 text-center">
                    <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="trending-img">
                    </a>
                </div>
                <div class="col-sm-6">
                    <div>
                        <h2>Name : {{$item->name}}</h2>
                        <h4>Delivery Status : {{$item->status}}</h4>
                        <h4>Address : {{$item->address}} </h4>
                        <h4>Payment Status : {{$item->payment_status}}</h4>
                        <h4>Payment Method : {{$item->payment_method}}</h4>
                    </div>
                </div>

            </div>
            <br><br>
            @endforeach
        </div>
    </div>
</div>

@endsection