@extends('master')
@section('content')
<div class="container custom-login " style="padding-bottom: 30%;">
    <div class="col translate-middle" style="padding-left: 30%;padding-right:30%;">
        <div class="card bg-warning">
            <div class="card-header text-center">
                <h3><b>Login</b></h3>
            </div>
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        @if(session()->has('error'))
                        <div class="container text-center">
                            <div class="alert alert-danger alert-dismissible text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <b>{{session('error')}}</b>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><b>Email address</b></label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div><br>
                    <div class="form-group">
                        <h6>You have not an account ? <a href="/register">Register</a></h6>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')