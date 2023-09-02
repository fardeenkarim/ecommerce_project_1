<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="Responsive, HTML5 template, restaurants, Food Ex, Boomdevs, Multi Page, Landing, Startup, Business, Company, Corporate, Creative">
    <meta name="author" content="Boomdevs" />

    <!-- SITE TITLE -->
    <title>Food Ex</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/bootstrap.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/font-awesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/select2.min.css">

    <!-- Bootstrap DateRange Picker CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('contents') }}/website/css/bootstrap-date-range.css" />

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/owl.theme.default.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('contents') }}/website/css/main.css">

</head>

<body>

    <!-- Start header section -->
    <header class="header-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('contents') }}/website/images/logo.svg" alt="Food Ex"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collpase navbar-collapse"></div>
                <!-- Main menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <ul>
                                    <li class="dropdown-item">
                                        <a href="menu-version-one.html">Menu Version One</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="menu-version-two.html">Menu Version Two</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="booking.html">Booking Table</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="blog-version-one.html">Blog Version one</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="blog-version-two.html">Blog Version Two</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="single-blog.html">Single Blog Page</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="service.html">Service</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="shop-version-one.html">Shop Version One</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="shop-version-two.html">Shop Version Two</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="shop-version-three.html">Shop Version Three</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="shop-version-four.html">Shop Version Four</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="single-shop.html">Single Shop</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="cart.html">Cart Page</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="checkout.html">Checkout Page</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="register.html">Register Page</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="login.html">Login Page</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="order-details.html">Order Details</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu-version-two.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop-version-one.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html"><i class="fas fa-cart-plus active"></i></a>
                        </li>
                    </ul>
                    <div class="header-btn">
                        <a href="booking.html" class="btn btn-secondary">Order Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header section -->

    <main>

        <!-- Start hero section -->
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="hero-text">
                            <h3 class="sub-title">Welcome </h3>
                            <h1 class="my-20">Enjoy the Organic Food</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut </p>
                            <div class="hero-btn mt-45">
                                <a href="about-us.html" class="btn btn-primary">About us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="hero-image">
                            <img class="bounce-animate" src="{{ asset('contents') }}/website/images/hero-img.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End hero section -->

        <!-- Start featured section -->
        <section class="featured-section">
            <div class="featured-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="featured-images">
                                <img class="bounce-animate" src="{{ asset('contents') }}/website/images/featured-image.png"
                                    alt="featured images">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="featured-text pt-70">
                                <h3 class="sub-title">About Us</h3>
                                <h2 class="mt-5 mb-20">Food Ex Restaurant</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation </p>
                                <div class="featured-btn mt-45">
                                    <a href="booking.html" class="btn btn-primary">Book Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End featured section -->

        <!-- Start product section -->
        <section class="product-menu-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="product-menu-info">
                            <h3 class="sub-title">Restaurant</h3>
                            <h2 class="mt-5 mb-20">Menu</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation </p>
                            <div class="product-menu-btn mt-45">
                                <a href="menu-version-one.html" class="btn btn-primary">See Full Menu</a>
                            </div>
                            <div class="product-menu-images">
                                <img class="bounce-animate" src="{{ asset('contents') }}/website/images/home-menu-images.png" alt="Menu Images">
                            </div>
                        </div>
                    </div>
                    <!-- Product menu -->
                    <div class="col-lg-6 col-12">
                        <div class="row justify-content-md-center">
                            <div class="product-menu-nav">
                                <div class="isotop_button_wrapper">
                                    <button class="btn active" type="button" data-filter=".salads">Salads</button>
                                    <button class="btn" type="button" data-filter=".soups">Soups</button>
                                    <button class="btn" type="button" data-filter=".drinks">Drinks</button>
                                </div>
                            </div>
                        </div>
                        <!-- Product menu items -->
                        <div class="row product-menu-isotop">
                            <div class="col-lg-6 col-md-6 col-12 salads">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 soups">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 drinks">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 salads">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 drinks">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 soups">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-2.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 drinks">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-3.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 salads">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-4.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 soups">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-2.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 salads">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-1.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <a href="#">
                                                    <div class="card-cart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="card-heart-icon">
                                                        <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 soups">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-2.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 drinks">
                                <div class="product-card-wrapper">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('contents') }}/website/images/food-dish-3.png" alt="food-dish">
                                            <div class="card-price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Corn-Shrimp</h5>
                                            <p class="card-text">Vegetables salad</p>
                                            <div class="card-icon">
                                                <div class="card-cart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                </div>
                                                <div class="card-heart-icon">
                                                    <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start booking section -->
        <div class="booking-form-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="booking-form-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="booking-person-wrapper">
                                        <img src="{{ asset('contents') }}/website/images/customer-icon.svg" alt="customer-icon">
                                        <div class="booking-person-wrapper-select-nav">
                                            <div class="form-group">
                                                <select id="select-person">
                                                    <option>1 Person</option>
                                                    <option>2 Person</option>
                                                    <option>3 Person</option>
                                                    <option>4 Person</option>
                                                </select>
                                                <div class="booking-person-wrapper-icon">
                                                    <img src="{{ asset('contents') }}/website/images/angle-down.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="booking-date-wrapper">
                                        <img src="{{ asset('contents') }}/website/images/wall-clock.svg" alt="Calendar">
                                        <div class="booking-input-date-wrapper">
                                            <div class="form-group">
                                                <input type="text" class="booking-form-pickup-date" placeholder=" ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="booking-time-wrapper">
                                        <img src="{{ asset('contents') }}/website/images/wall-clock.svg" alt="Calendar">
                                        <div class="booking-input-time-wrapper">
                                            <div class="form-group">
                                                <input type="text" class="booking-form-pickup-time" placeholder=" ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="booking-btn-wrapper">
                                        <a href="booking.html" class="btn btn-primary">Book Table</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End booking section -->

        <!-- Start Counter section -->
        <section class="counter-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 col-12">
                        <div class="single-counter-wrapper">
                            <div class="counter-cooks-number">
                                <h2 class="counter">68</h2>
                            </div>
                            <h4>Cooks</h4>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 col-12">
                        <div class="single-counter-wrapper">
                            <div class="counter-food-number">
                                <h2 class="counter">350</h2>
                            </div>
                            <h4>Food items</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 col-12">
                        <div class="single-counter-wrapper">
                            <div class="counter-beverages-number">
                                <h2 class="counter">204</h2>
                            </div>
                            <h4>Beverages</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 col-12">
                        <div class="single-counter-wrapper">
                            <div class="counter-award-number">
                                <h2 class="counter">350</h2>
                            </div>
                            <h4>Award</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter section -->

        <!-- Start Special Food section -->
        <section class="special-food-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special-food-items">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="special-food-item">
                                        <div class="product-card-wrapper">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('contents') }}/website/images/special-dish-1.png" alt="food-dish">
                                                    <div class="card-price">
                                                        <span>$50</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Corn-Shrimp</h5>
                                                    <p class="card-text">Vegetables salad</p>
                                                    <div class="card-icon">
                                                        <div class="card-cart-icon">
                                                            <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                        </div>
                                                        <div class="card-heart-icon">
                                                            <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="special-food-item">
                                        <div class="product-card-wrapper">
                                            <div class="card">
                                                <div class="card-img" id="special-card-img">
                                                    <img src="{{ asset('contents') }}/website/images/special-dish-2.png" alt="food-dish">
                                                    <div class="card-price">
                                                        <span>$50</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Corn-Shrimp</h5>
                                                    <p class="card-text">Vegetables salad</p>
                                                    <div class="card-icon">
                                                        <div class="card-cart-icon">
                                                            <img src="{{ asset('contents') }}/website/images/shopping-cart.svg" alt="">
                                                        </div>
                                                        <div class="card-heart-icon">
                                                            <img src="{{ asset('contents') }}/website/images/heart.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special-food-info">
                            <h3 class="sub-title">Chinese</h3>
                            <h2 class="mt-5 mb-20">Special Item</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation </p>
                            <div class="special-food-btn mt-45">
                                <a href="menu-version-one.html" class="btn btn-primary">See Full Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Food section -->

        <!-- Start Team section -->
        <section class="team-section">
            <div class="container">
                <div class="row d-flex justify-content-md-center">
                    <div class="col-lg-6 col-12">
                        <div class="team-info text-center">
                            <h3 class="sub-title">Team</h3>
                            <h2 class="mt-5 mb-20">Our Experience Chefs</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class="team-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-team-item">
                                <div class="card">
                                    <div class="team-img">
                                        <img class="card-img-top" src="{{ asset('contents') }}/website/images/team-1.png" alt="team-image">
                                        <ul class="team-social-icon list-unstyled">
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg" alt="Facrbook"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter"></a></li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg" alt="Pinterest"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg" alt="LinkedIn"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Mark Anthony</h4>
                                        <p>French Kitchen Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-team-item">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/team-2.png" alt="team-image">
                                    <ul class="team-social-icon list-unstyled">
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg" alt="Facrbook"></a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter"></a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg" alt="Pinterest"></a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg" alt="LinkedIn"></a></li>
                                    </ul>
                                    <div class="card-body">
                                        <h4 class="card-title">Mark Anthony</h4>
                                        <p>French Kitchen Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-team-item">
                                <div class="card">
                                    <div class="team-img">
                                        <img class="card-img-top" src="{{ asset('contents') }}/website/images/team-3.png" alt="team-image">
                                        <ul class="team-social-icon list-unstyled">
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg" alt="Facrbook"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter"></a></li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg" alt="Pinterest"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg" alt="LinkedIn"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Mark Anthony</h4>
                                        <p>French Kitchen Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-team-item">
                                <div class="card">
                                    <div class="team-img">
                                        <img class="card-img-top" src="{{ asset('contents') }}/website/images/team-4.png" alt="team-image">
                                        <ul class="team-social-icon list-unstyled">
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg" alt="Facrbook"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter"></a></li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg" alt="Pinterest"></a>
                                            </li>
                                            <li><a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg" alt="LinkedIn"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Mark Anthony</h4>
                                        <p>French Kitchen Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team section -->

        <!-- Start Newsletter section -->
        <section class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-12">
                                    <div class="newsletter-img">
                                        <img src="{{ asset('contents') }}/website/images/discount.svg" alt="20% discount">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="newsletter-text">
                                        <h3 class="sub-title">Subscribe to our</h3>
                                        <h2>Newsletter</h2>
                                        <p>Subscribe to our newsletter and receive 15%
                                            discount from your order. </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="newsletter-form">
                                        <form class="form-inline">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Your email">
                                                <div class="subscribe-btn">
                                                    <button type="submit" class=" btn btn-primary">Subscribe</button>
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
        </section>
        <!-- End Newsletter section -->

        <!-- Start Blog section -->
        <section class="blog-section">
            <div class="container">
                <div class="row d-flex justify-content-md-center">
                    <div class="col-lg-6 col-12">
                        <div class="blog-info text-center">
                            <h3 class="sub-title">Blog</h3>
                            <h2>Our Food Update</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="single-blog-item">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-1.png"
                                            alt="blog-image"></a>
                                    <div class="card-body">
                                        <div class="post-meta-item">
                                            <div class="post-meta">
                                                <div class="post-file">
                                                    <img src="{{ asset('contents') }}/website/images/file.svg" alt="">
                                                    <a href="#">New</a>
                                                </div>
                                                <div class="post-date">
                                                    <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                    <p>Dec 19, 2020</p>
                                                </div>
                                                <div class="post-comment">
                                                    <img src="{{ asset('contents') }}/website/images/chat.svg" alt="message">
                                                    <p>(12)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                    alt="arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="single-blog-item">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-2.png"
                                            alt="blog-image"></a>
                                    <div class="card-body">
                                        <div class="post-meta-item">
                                            <div class="post-meta">
                                                <div class="post-file">
                                                    <img src="{{ asset('contents') }}/website/images/file.svg" alt="">
                                                    <a href="#">New</a>
                                                </div>
                                                <div class="post-date">
                                                    <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                    <p>Dec 19, 2020</p>
                                                </div>
                                                <div class="post-comment">
                                                    <img src="{{ asset('contents') }}/website/images/chat.svg" alt="message">
                                                    <p>(12)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <a href="#">Read more <span> <img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                    alt="arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="single-blog-item">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-3.png"
                                            alt="blog-image"></a>
                                    <div class="card-body">
                                        <div class="post-meta-item">
                                            <div class="post-meta">
                                                <div class="post-file">
                                                    <img src="{{ asset('contents') }}/website/images/file.svg" alt="">
                                                    <a href="#">New</a>
                                                </div>
                                                <div class="post-date">
                                                    <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                    <p>Dec 19, 2020</p>
                                                </div>
                                                <div class="post-comment">
                                                    <img src="{{ asset('contents') }}/website/images/chat.svg" alt="message">
                                                    <p>(12)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                    alt="arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog section -->

        <!-- Start Testimonial section -->
        <section class="testimonial-section">
            <div class="container">
                <div class="row d-flex justify-content-md-center">
                    <div class="col-lg-6 col-12">
                        <div class="testimonial-info text-center">
                            <h3 class="sub-title">Client</h3>
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-md-center">
                    <div class="col-lg-8 col-12">
                        <div class="testimonial-wrapper">
                            <div class="row d-flex justify-content-md-center">
                                <div class="col-lg-9 col-12">
                                    <div class="testimonial-carousel text-center">
                                        <div class="owl-carousel owl-theme testimonial-slider">
                                            <div class="item">
                                                <img src="{{ asset('contents') }}/website/images/client-img.png" alt="client-img">
                                                <h4>Jessica Lee</h4>
                                                <span>Chinese Kitchen Lead</span>
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua”
                                                </p>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('contents') }}/website/images/client-img.png" alt="client-img">
                                                <h4>Jessica Lee</h4>
                                                <span>Chinese Kitchen Lead</span>
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua”
                                                </p>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('contents') }}/website/images/client-img.png" alt="client-img">
                                                <h4>Jessica Lee</h4>
                                                <span>Chinese Kitchen Lead</span>
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua”
                                                </p>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('contents') }}/website/images/client-img.png" alt="client-img">
                                                <h4>Jessica Lee</h4>
                                                <span>Chinese Kitchen Lead</span>
                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod
                                                    tempor
                                                    incididunt ut labore et dolore magna aliqua”
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial section -->

    </main>

    <!-- Start Footer section -->
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore </p>
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
                                <li><a href="menu-version-one.html">Menu</a></li>
                                <li><a href="shop-version-one.html">Shop</a></li>
                                <li><a href="blog-version-one.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="booking.html">Book Table</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="single-shop.html">Single Shop</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer section -->

    <!--  jquery-3.5.1 -->
    <script src="{{ asset('contents') }}/website/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('contents') }}/website/js/bootstrap.min.js"></script>

    <!-- Isotope js -->
    <script src="{{ asset('contents') }}/website/js/isotope.pkgd.min.js"></script>

    <!-- Select2 js -->
    <script src="{{ asset('contents') }}/website/js/select2.min.js"></script>

    <!-- Moment JS -->
    <script src="{{ asset('contents') }}/website/js/moment.min.js"></script>

    <!-- Bootstrap DateRange Picker js -->
    <script src="{{ asset('contents') }}/website/js/bootstrap-date-range.min.js"></script>

    <!-- countup js -->
    <script src="{{ asset('contents') }}/website/js/waypoints.min.js"></script>
    <script src="{{ asset('contents') }}/website/js/jquery.countup.min.js"></script>

    <!--  Owl Carousel JS  -->
    <script src="{{ asset('contents') }}/website/js/owl.carousel.min.js"></script>

    <!--  Jquery ScrollUp JS  -->
    <script src="{{ asset('contents') }}/website/js/jquery.scrollUp.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('contents') }}/website/js/main.js"></script>

</body>

</html>