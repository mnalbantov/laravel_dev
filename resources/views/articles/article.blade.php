@extends('layouts.master')
@section('title')
    {{$title}}
    @stop
@section('content')
    <div class="row">

                <div class="col-md-8">

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#">{{$article->name}}</a>
                    </h2>
                    <p class="lead">
                        by <a href="#">{{$article->user->username}}</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> Posted on {{$article->published_at}}</p>
                    <hr>
                    <a href="#">
                        <img class="img-responsive img-hover" src="images/krisko-900x300.jpg" alt="">
                    </a>
                    <hr>
                    <p>{{$article->article_body}}</p>
                    <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                    <hr>


@stop