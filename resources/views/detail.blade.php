@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <br><br>
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <br>
            <a href="/product">Back</a>
            <br><br>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Catagory : {{$product['categaory']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to cart</button>
            </form>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection