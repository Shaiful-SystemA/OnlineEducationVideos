
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" >

    <title>Modern Business - Start Bootstrap Template</title>

{{--<!-- Bootstrap Core CSS -->--}}
{{--<link href="../../public/src/css/bootstrap.min.css" rel="stylesheet">--}}

{{--<!-- Custom CSS -->--}}
{{--<link href="../../public/src/css/modern-business.css" rel="stylesheet">--}}

{{--<!-- Custom Fonts -->--}}
{{--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{URL::to('src/css/modern-business.css') }}">




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
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
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
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li class="active">
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

{{--page form --}}








<div class="row">
    <div class="col-md-6">
        <h3>Sign Up</h3>
        <form action="{{ route('signup')}}" method="post">
            <div class="form-group">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="user_name">User name</label>
                <input class="form-control" type="text" name="user_name" id="user_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input class="hidden" name="_token" value="{{Session::token()}}" >
        </form>
    </div>

    <div class="col-md-6">
        <h3> Login In</h3>
        <form action="{{route('signin')}}" method="post">
            <div class="form-group">
                <label for="email">Your E-Mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="user_name">User name</label>--}}
                {{--<input class="form-control" type="text" name="user_name" id="user_name">--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input class="hidden" name="_token" value="{{Session::token()}}" >
        </form>
    </div>



</div>


{{--<!-- jQuery -->--}}
{{--<script src="../../public/src/js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="../../public/src/js/bootstrap.min.js"></script>--}}


<script type="text/javascript" src="{{URL::to('src/js/jquery.js')}}"></script>



<!-- Bootstrap Core JavaScript -->
{{--<script src="../../public/src/js/bootstrap.min.js"></script>--}}


<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>


</body>

</html>

