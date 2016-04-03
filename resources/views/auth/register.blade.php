@extends('layouts.master')
@section('title')
    Register page
    @stop
@section('content')
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action="{{URL::asset('auth/register')}}" method="post" role="form">
            {!! csrf_field() !!}
        <div class="row myborder">
            <h4 style="color: #7EB59E; margin: initial; padding-top:30px; margin-bottom: 10px;">Sign Up Now</h4><hr>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="User Name" name="username" id="UserRegistration_username" type="text">                                                        </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Password" name="password" id="UserRegistration_password" type="password">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="First Name" name="first_name" id="UserRegistration_fname" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Last Name" name="last_name" id="UserRegistration_lname" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope mycolor"></i></span>
                <input size="60" maxlength="255"  class="form-control" placeholder="Email Address" name="email" id="UserRegistration_email_address" type="email">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Contact Number" name="phone" id="UserRegistration_contactnumber" type="text">                                    </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn-u pull-left" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        </form>
        @include('errors.validation')
    </div>



@endsection