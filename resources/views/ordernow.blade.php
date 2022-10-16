@extends('master')
@section('content')

<!-- -----------*** Carts ***  -->
<br><br>
<div class="container custon-product">
    <div class="col-sm-12">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr class="bg-secondary">
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter Your Address" class="form-control" id="" cols="30" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Payment Method</label><br><br>
                    <input type="radio" name="payment" value="cash"> <span>Online payment</span><br><br>
                    <input type="radio" name="payment" value="cash"> <span>EMI payment</span><br><br>
                    <input type="radio" name="payment" value="cash"> <span>Payment on Delivery</span><br>
                </div>
                <input type="submit" class="btn btn-success" value="Order Now"><br><br>
            </form>
        </div>
    </div>
</div>

@endsection