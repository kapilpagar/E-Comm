@extends('master')
@section('content')

<!-- -----------*** Carts ***  -->
<div class="container custon-product">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <div class="text-center bg-warning">
                <br>
                <h3>Result of products</h3>
                <br>
            </div><br><br>
            <div class="text-left">
                <a href="/ordernow" class="btn btn-success btn-lg">Order Now</a><br><br>
            </div>
            <!-- ----------*** Notification *** -->
            <div class="text-center">
                @if(session()->has('deleteCart'))
                <div class="container text-center">
                    <div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <b>{{session('deleteCart')}}</b>
                    </div>
                </div>
                @endif
            </div><br><br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="trending-img">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div>
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                        <h5><b>Price : </b>${{$item->price}} </h5>

                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from card</a>
                </div>
            </div>
            <br><br>
            @endforeach
        </div>
    </div>
</div>

@endsection