@extends('master')
@section('content')
<div class="container custom-login " style="padding-bottom: 30%;">
    <div class="col translate-middle" style="padding-left: 30%;padding-right:30%;">
        <div class="card bg-warning">
            <div class="card-header text-center">
                <h3><b>Register</b></h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        @if(session()->has('success'))
                        <div class="container text-center">
                            <div class="alert alert-success alert-dismissible text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <b>{{session('success')}}</b>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><b> Name</b></label>
                        <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label><b>Email address</b></label>
                        <input type="email" name="email" class="form-control " aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="password" name="password" class="form-control " placeholder="Enter Password">
                    </div><br>
                    <div class="form-group">
                        <h6>You already have an account ? <a href="/login">Login</a></h6>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')