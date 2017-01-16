<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

{{--<!-- Bootstrap Core CSS -->--}}
{{--<link href="../../public/src/css/bootstrap.min.css" rel="stylesheet">--}}

{{--<!-- Custom CSS -->--}}
{{--<link href="../../public/src/css/modern-business.css" rel="stylesheet">--}}




<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{URL::to('src/css/modern-business.css') }}">



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
                        <li class="active">
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
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

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Courses
            </h1>
            <ol class="breadcrumb">
                <li><a href="full-width.html">Course Home</a>
                </li>
                <li class="active">Sidebar Page</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="index.html" class="list-group-item">C# in 100 Hrs</a>
                <a href="sidebar" class="list-group-item">AngularJS 1.5 & 2.0 </a>
                <a href="services.html" class="list-group-item">MVC 5 in 2 days</a>
                <a href="contact.html" class="list-group-item">Angular 1.5: Lab 3</a>
                <a href="portfolio-1-col.html" class="list-group-item">Design Pattern </a>
                <a href="portfolio-2-col.html" class="list-group-item">MSBI with Project</a>
                <a href="portfolio-3-col.html" class="list-group-item">SharePoint Step by Step in 8 </a>
                <a href="portfolio-4-col.html" class="list-group-item">Learn .NET in 60 days</a>
                <a href="portfolio-item.html" class="list-group-item">.NET Best Practice Series</a>
                <a href="blog-home-1.html" class="list-group-item">Angular 1.5: Lab 9</a>
                <a href="blog-home-2.html" class="list-group-item">Angular 1.5: Lab 10</a>
                <a href="blog-post.html" class="list-group-item">Angular 1.5: Lab 11</a>
                <a href="full-width.html" class="list-group-item">Angular 1.5: Lab 12</a>
                <a href="sidebar.html" class="list-group-item active">Angular 1.5: Lab 13</a>
                <a href="faq.html" class="list-group-item">Angular 2: Lab 1</a>
                <a href="404.html" class="list-group-item">Angular 2: Lab 2</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 3</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 4</a>
                <a href="pricing.html" class="list-group-item">Angular 2: Lab 5</a>

            </div>
        </div>
        <!-- Content Column -->



        <div class="row">

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">


                    <img src="{{asset('csharplogo1.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">C# in 100 hours</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">


                    <img src="{{asset('Angular.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="sidebar">AngularJS 1.5 & 2.0</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="sidebar" class="btn btn-default">Preview</a>
                </div>
            </div>

            <br>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">


                    <img src="{{asset('UMLIcon.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Unified Modelling Language</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>
            </div>


            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">


                    <img src="{{asset('OOPS.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Object Oriented Programming</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">


                    <img src="{{asset('sqlserveer2012.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">SQL Server training</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>


                <div class="thumbnail">


                    <img src="{{asset('MSBI.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Microsoft Business Intelligence</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>

                <div class="thumbnail">


                    <img src="{{asset('MVC5.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Microsoft MVC5</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>

                <div class="thumbnail">


                    <img src="{{asset('Sharepoint.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Sharepoint</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>

                <div class="thumbnail">


                    <img src="{{asset('dotneticon.jpg')}}">

                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">.NET in 60 days</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>



            </div>


            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="{{asset('OOPQuestion&Answer.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">OOP Questions & Answers</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>


                <div class="thumbnail">
                    <img src="{{asset('UnderstandingOOP.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Understanding OOPS in real life</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>

                <div class="thumbnail">
                    <img src="{{asset('VisualStudiotipsTricks.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Visual Studio Tips & Tricks</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>


                <div class="thumbnail">
                    <img src="{{asset('wcficon.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Window Communication Foundation</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>
                <div class="thumbnail">
                    <img src="{{asset('WPFicon.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">WPF Question & Answer</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>

                <div class="thumbnail">
                    <img src="{{asset('Designpatterns2.jpg')}}">
                    {{--<img src="http://placehold.it/320x150" alt="">--}}
                    <div class="caption">
                        <h4 class="pull-right"></h4>
                        <h4><a href="#">Design patterns</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    {{--<div class="ratings">--}}
                    {{--<p class="pull-right">15 reviews</p>--}}
                    {{--<p>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--<span class="glyphicon glyphicon-star"></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    <a href="#" class="btn btn-default">Preview</a>
                </div>




            </div>





        </div>

    </div>








    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">The Awesome Programmer package </h2>
        </div>
        <div class="col-md-6">
            <p>The Entire package includes </p>
            <ul>
                <li><strong>C# in 100 hrs</strong>
                </li>
                <li><strong>Angular 1.5 & 2.0 </strong>
                </li>
                <li><strong> MSBI</strong>
                </li>
                <li><strong>Design Patterns </strong>
                </li>
                <li><strong>Microsoft MVC5 </strong>
                </li>
                <li><strong> Sharepoint </strong>
                </li>
                <li><strong>Window Communication Foundation </strong>
                </li>
                <li><strong>Window Presentation Fondation</strong>
                </li>
                <li><strong> Visual Studio Tips and Tricks</strong>
                </li>
                <li><strong>Unified Modelling Language</strong>
                </li>
                <li><strong>SQLServer 2012 </strong>
                </li>
                <li><strong> Object Oriented Programming</strong>
                </li>

            </ul>
            <p>Over 900 hours of quality videos and additional materials to ensure you are prepared for the job market, join now  for a low price of $14.99 per month.</p>
        </div>
        <div class="col-md-6">
            {{--<img class="img-responsive" src="http://placehold.it/700x450" alt="">--}}
            <a href="pricing">  <img  class="img-responsive" src="{{asset('BuyMeNowLogo.jpg')}}"></a>

        </div>
    </div>





    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

{{--<!-- jQuery -->--}}
{{--<script src="../../public/src/js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="../../public/src/js/bootstrap.min.js"></script>--}}




<script type="text/javascript" src="{{URL::to('src/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>





</body>

</html>



<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:17px 13px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:17px 13px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
    .tg .tg-lqy6{text-align:right;vertical-align:top}
    .tg .tg-yw4l{vertical-align:top}
    .tg .tg-9hbo{font-weight:bold;vertical-align:top}
</style>