@extends('layouts.web-layout')
@section('content')
<main>
  <!-- Start About Us Breadcrumb section -->
        <section class="about-us-breadcrumb-section">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="breadcrumb-content">
                            <h3 class="sub-title">About Us</h3>
                            <h2 class="mt-10 mb-20">About Food Ex</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua
                            </p>
                            <nav class="mt-30" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Breadcrumb section -->

        <!-- Start featured section -->
        <section class="about-us-featured-section">
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
                                    <div class="booking-btn-wrapper d-flex justify-content-end">
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
        <section class="about-us-newsletter-section">
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
@endsection