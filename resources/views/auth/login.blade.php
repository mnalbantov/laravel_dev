@extends('layouts.master')
@section('title')
    Вход
    @stop
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{URL::asset('auth/login')}}" method="post" id="loginForm" class="col-sm-4 col-sm-offset-4">
                {!! csrf_field() !!}
            <h2 class="form-signin-heading">Login</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">Remember me
                </label>
            </div>
                <div id="loader" style="display:none;"><img src="{{URL::asset('images/ajax-loader.gif')}}"  alt=""></div>
            <button class="btn btn-lg btn-primary btn-block" id="loginSubmit" type="submit">Login</button>
        </form>
        </div>
            @include('errors.validation')
    </div>


    @endsection
