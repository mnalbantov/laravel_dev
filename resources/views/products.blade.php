@extends('layouts.master')

@section('title')
    {{$title}}
@stop

@section('carousel')

        <!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('images/iphone-6.jpg');"></div>
            <div class="carousel-caption">
                <h2>Iphone 6</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/iphone.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/iphone6d.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/forest-bg.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 4</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
@stop
@section('content')
        <!-- Page Content -->
<div class="container">
        <!-- Marketing Icons Section -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Our products!
        </h1>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i>The lowest prices</h4>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                <a href="#" class="btn btn-default">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">


     <div class="panel-heading">
                <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Ship over &dollar;20</h4>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                <a href="#" class="btn btn-default">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                <a href="#" class="btn btn-default">Learn More</a>
            </div>
        </div>
    </div>
</div>

    <!-- /.row-->

            <!-- Features Section -->

    <div class="row">


        @if($products)
        @foreach($products as $product)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="images/{{$product->icon}}" alt="">
                <div class="caption">
                    <h4 class="pull-right">${{$product->price}}</h4>
                    <h4><a href="#">{{$product->product_name}}</a>
                    </h4>
                    <p>{{$product->long_description}}.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">reviews</p>
                    <p>

                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>
        </div>
          @endforeach
            @endif

          
    @endsection
