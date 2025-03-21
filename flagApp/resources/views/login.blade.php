<!DOCTYPE HTML>
<!--
        Traveler by freehtml5.co
        Twitter: http://twitter.com/fh5co
        URL: http://freehtml5.co
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FBC-Accounting System &mdash; </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FBC-Accounting System" />
        <meta name="keywords" content="FBC-Accounting System" />
        <meta name="author" content="FBC-Accounting System" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('template/login/css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('template/login/css/icomoon.css')}}">
        <!-- Themify Icons-->
        <link rel="stylesheet" href="{{asset('template/login/css/themify-icons.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('template/login/css/bootstrap.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('template/login/css/magnific-popup.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('template/login/css/bootstrap-datepicker.min.css')}}">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="{{asset('template/login/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/login/css/owl.theme.default.min.css')}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('template/login/css/style.css')}}">

        <!-- Modernizr JS -->
        <script src="{{asset('template/login/js/modernizr-2.6.2.min.js')}}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="gtco-loader"></div>

        <div id="page">


            <!-- <div class="page-inner"> -->
            <nav class="gtco-nav" role="navigation">
                <div class="gtco-container">

                    <div class="row">
                         <div class="col-sm-6 col-xs-12">
                            <div id="gtco-logo"><a>FBC-Accounting System<small style="color: red"> (Version 1.0)</small></a></div>
                        </div>
                    </div>

                </div>
            </nav>

            <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(template/login/images/calc.webp)">
                <div class="overlay"></div>
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0 text-left">


                            <div class="row row-mt-15em">
                                <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                    <h1>FBC-Accounting Systems</h1>	
                                </div>
                                <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                    <div class="form-wrap">
                                        <div class="tab">

                                            <div class="tab-content">
                                                <div class="tab-content-inner active" data-content="signup">
                                                    <h3>Login</h3>
                                                    <form   method="post" action="login" id="loginform">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="fullname">User Name</label>
                                                                <input type="text" id="username" required="true" name="username" placeholder="Username" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="fullname">Password</label>
                                                                <input type="password" id="password" required="true" name="password"  placeholder="Password" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <button id="btnlogin" class="btn btn-primary btn-block">Login</button>
                                                            </div>
                                                        </div>
                                                    </form>	
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </header>

            <!-- </div> -->

        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="{{asset('template/login/js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('template/login/js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('template/login/js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('template/login/js/jquery.waypoints.min.js')}}"></script>
        <!-- Carousel -->
        <script src="{{asset('template/login/js/owl.carousel.min.js')}}"></script>
        <!-- countTo -->
        <script src="{{asset('template/login/js/jquery.countTo.js')}}"></script>

        <!-- Stellar Parallax -->
        <script src="{{asset('template/login/js/jquery.stellar.min.js')}}"></script>

        <!-- Magnific Popup -->
        <script src="{{asset('template/login/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('template/login/js/magnific-popup-options.js')}}"></script>

        <!-- Datepicker -->
        <script src="{{asset('template/login/js/bootstrap-datepicker.min.js')}}"></script>


        <!-- Main -->
        <script src="{{asset('template/login/js/main.js')}}"></script>

    </body>
</html>

