<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('css/modern-business.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/signup-form.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Nalbantov</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li>
                    <a href="products">Products</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user">&nbsp;</i>{{ ucfirst(Auth::getUser()->first_name) }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{Url::asset('profile')}}"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="{{URL::asset('profile/settings')}}"><i class="fa fa-fw fa-gear"></i>Settings</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="auth/logout"><i class="fa fa-fw fa-power-off"></i>Log out</a>
                        </li>

                    </ul>
                </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::asset('auth/login')}}">Sign In</a>
                            </li>
                            <li>
                                <a href="{{URL::asset('auth/register')}}">Sign Up</a>
                            </li>

                        </ul>
                    </li>
                    @endif

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

            @yield('carousel')
            @yield('content')

                    <!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; My Website 2015</p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{URL::asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/scripts.js')}}"></script>
<script src="{{URL::asset('js/jquery.backstretch.min.js')}}"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    var __lc = {};
    __lc.license = 6745181;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();

</script>
<!-- End of LiveChat code -->
</body>

</html>