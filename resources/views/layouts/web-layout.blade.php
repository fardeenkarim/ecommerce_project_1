<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="Responsive, HTML5 template, restaurants, Food Ex, Boomdevs, Multi Page, Landing, Startup, Business, Company, Corporate, Creative">
    <meta name="author" content="Boomdevs" />

    <!-- SITE TITLE -->
    <title>Food Ex</title>

    <!-- ICON LINK -->
    <link rel="shortcut icon" href="{{ asset('contents') }}/website/images/logo.png" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/bootstrap.css">

    <!-- FONTAWSOME CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/font-awesome/css/all.min.css">

    <!-- SELECT2 CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/select2.min.css">

    <!-- BOOTSTRAP DATERANGE PICKER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('contents') }}/website/css/bootstrap-date-range.css" />

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/owl.theme.default.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/main.css">

</head>

<body>

    <!-- HEADER SECTION START -->
    <header class="header-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('contents') }}/website/images/logo.svg" alt="Food Ex"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collpase navbar-collapse"></div>
                <!-- MAIN MENU -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/checkout') }}">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="header-btn">
                        <a href="{{ url('/login') }}" class="btn btn-secondary">Login Now!</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER SECTION END -->

    @yield('content')

    <!-- FOOTER SECTION START -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-widget-item">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('contents') }}/website/images/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="footer-logo-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                        <div class="footer-social-item">
                            <h4>Follow Us</h4>
                            <div class="footer-social">
                                <a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg" alt="Facebook"></a>
                                <a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter"></a>
                                <a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg" alt="Pinterest"></a>
                                <a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg" alt="LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-widget-item">
                        <div class="footer-widget-address">
                            <div class="footer-widget-title">
                                <h4>Contact</h4>
                            </div>
                            <div class="footer-address-info">
                                <p><span>Phone : </span>+11244 414 684</p>
                                <p><span>Email : </span>contact@boomdevs.com</p>
                                <p><span>Address : </span>85 Bay Meadows Drive Woodstock, GA 30188,United States</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6 col-12">
                    <div class="footer-widget-item">
                        <div class="footer-widget-nav">
                            <div class="footer-widget-title">
                                <h4>Pages</h4>
                            </div>
                            <ul class="list-unstyled">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="shop-version-one.html">Shop</a></li>
                                <li><a href="blog-version-one.html">Blog</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER SECTION END -->

    <!--  JQUERY -->
    <script src="{{ asset('contents') }}/website/js/jquery-3.5.1.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('contents') }}/website/js/bootstrap.min.js"></script>

    <!-- ISOTOPE JS -->
    <script src="{{ asset('contents') }}/website/js/isotope.pkgd.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('contents') }}/website/js/select2.min.js"></script>

    <!-- MOMENT JS -->
    <script src="{{ asset('contents') }}/website/js/moment.min.js"></script>

    <!-- BOOTSTRAP DATERANGE PICKER JS -->
    <script src="{{ asset('contents') }}/website/js/bootstrap-date-range.min.js"></script>

    <!-- COUNT UP JS -->
    <script src="{{ asset('contents') }}/website/js/waypoints.min.js"></script>
    <script src="{{ asset('contents') }}/website/js/jquery.countup.min.js"></script>

    <!--  OWL COUROSEL JS  -->
    <script src="{{ asset('contents') }}/website/js/owl.carousel.min.js"></script>

    <!--  JQUERY SCROLLUP JS  -->
    <script src="{{ asset('contents') }}/website/js/jquery.scrollUp.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('contents') }}/website/js/main.js"></script>

</body>

</html>