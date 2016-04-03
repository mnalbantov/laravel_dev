@extends('layouts.master')
        @section('title')
        {{$title}}
        @stop

@section('content')
        <!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog Home One
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Blog Home One</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        @if(count($articles))
                @foreach ($articles as $article)
                <div class="col-md-8">

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#">{{$article->name}}</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">{{$article->username}}</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> {{$article->published_at}}</p>
                    <hr>
                    <a href="blog-post.html">
                        <img class="img-responsive img-hover" src="images/krisko-900x300.jpg" alt="">
                    </a>
                    <hr>
                    <p>{{$article->article_body}}</p>
                    <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                    <hr>
                @endforeach
                <!-- Blog Entries Column -->


            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        @endif

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
		                <span class="input-group-btn">
		                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
		                </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->
    @endsection



