<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Professional Skill Educational Council(PSEC)</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel='stylesheet' id='camera-css' href="{{ asset('assets/css/camera.css') }}" type='text/css' media='all'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->
    <script language="javascript">
        function validdation() {
            msg = '';
            if (document.getElementById("regroll").value == '') {
                alert('Enter Your Roll Number')
                return false;
            }

        }
    </script>
</head>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="#" class="logoimg desktoppicone">
                    <img src="assets/images/logo-text.png" alt="#" class="logoimgtxt desktoppic">
                </a>
            </div>

            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="c7 active"><a href="index.html">Home</a></li>
                    <li class="c4"><a href="aboutus.html">About Us</a></li>
                    <li class="c4"><a href="verification.html">Online Verification</a></li>
                    <li class="c4"><a href="members.html">Our Members</a></li>
                    <li class="c4 dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="threemonthscourses.html">Three Months Basic Courses</a></li>
                            <li><a href="sixmonthscourses.html">Six Months Advance Courses</a></li>
                            <li><a href="oneyearcourses.html">One Year Diploma Courses</a></li>
                            <li><a href="twoyearscourses.html">Two Years Diploma Courses</a></li>
                        </ul>
                    </li>
                    {{-- <li class="c4"><a href="contact.html">Contact</a></li> --}}
                    <li class="c4"><a href="{{ route('logout2')  }}">Logout</a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->
    <!-- Header -->
    <!-- /Header -->


    <header id="head" class="secondary" style="margin-top:60px;">
        <div class="container">
            <h1>Online Verification System</h1>
            <p>&nbsp;</p>
        </div>
    </header>






    <section class="container">
<br><br><br>
        @foreach (json_decode(auth()->user()->image) as $image)
            <img src="{{ asset('images/' . $image) }}" class="img-fluid" alt="...">
        @endforeach
    </section>

    <!-- footer -->
    <footer id="footer">

        <div class="container">
            <div class="row">
                <div class="footerbottom">
                    <div class="col-md-3 col-sm-6">
                        <div class="footerwidget">
                            <h4>
                                Three Months Courses
                            </h4>
                            <div class="menu-course">
                                <ul class="menu">
                                    <li><a href="#">
                                            Advertising and Promotion
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            Computer Networking
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            E-Commerce
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            AutoCAD
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footerwidget">
                            <h4>
                                Six Months Courses
                            </h4>
                            <div class="menu-course">
                                <ul class="menu">
                                    <li> <a href="#">
                                            Business Accounting and Finance </a>
                                    </li>
                                    <li><a href="#">
                                            AutoCAD (Civil + Electrical)
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            Computerized Accounting System
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            Computer Networking
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footerwidget">
                            <h4>
                                One Year Diploma
                            </h4>
                            <div class="menu-course">
                                <ul class="menu">
                                    <li><a href="#">
                                            Exective Manager in House Keeping
                                        </a>
                                    </li>
                                    <li> <a href="#">
                                            Exective Managerment in Insurance
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            Executive Manager in Environment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Executive Manager in IT management
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footerwidget">
                            <h4>Contact</h4>
                            <p></p>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Office No : 12, 1st Floor, <br />Royal
                                Plaza, 6th Road, <br />Rawalpindi Pakistan<br />
                                <br>
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;+92-333-1527630<br> <br>
                                <i class="fa fa-envelope-o"></i>&nbsp;&nbsp;info@psec.org.pk
                            </div>
                        </div><!-- end widget -->
                    </div>
                </div>
            </div>
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.html">Home</a> |
                                <a href="aboutus.html">About Us</a> |
                                <a href="verification.html">Online Verification</a> |
                                <a href="members.html">Our Members</a> |
                                <a href="contact.html">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright &copy; 2019. Designed by <a
                                    href="https://www.quranonlinestudy.com/consultancy/" rel="develop">@mbasoft@</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer> <!-- /footer -->


    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="assets/js/modernizr-latest.js"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/fancybox/jquery.fancybox.pack.js') }}"></script>

    <script type='text/javascript' src="{{ asset('assets/js/jquery.mobile.customized.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/camera.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        jQuery(function() {

            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: 'assets/images/'
            });

        });
    </script>

</body>


</html>
