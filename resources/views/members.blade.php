@extends('layouts.master')
@section('title')
    {{$title}}
    @stop
@section('content')
    <br><br>
    <hr>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="">
                <tr><th>Име</th><th>Фамилия</th><th>Email</th></th>
                </thead>
                @foreach($users as $user)
                    <tr><td>{{$user->first_name}}</td><td>{{$user->last_name}}</td><td>{{$user->email}}</td></tr>
                @endforeach
            </table>

        </div>
    </div>
    @endsection