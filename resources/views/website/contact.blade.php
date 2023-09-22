@extends('layouts.web-layout')
@section('content')
<main>
    <!-- Start Contact Breadcrumb section -->
        <section class="contact-us-breadcrumb-section">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-lg-6 col-12">
                        <div class="breadcrumb-content">
                            <h3 class="sub-title">Contact</h3>
                            <h2 class="mt-10 mb-20">Our Contact Form</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua
                            </p>
                            <nav class="mt-30" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Breadcrumb section -->

        <!-- Start Contact section -->
        <section class="contact-us-section">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-lg-6 col-12">
                        <div class="contact-title">
                            <h2>Contact Details</h2>
                            <p class="mt-20 mb-70">Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="contact-form-map">
                                <div class="map-init" id="map"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <!-- Contact Form -->
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name*">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input name="text" id="text" type="text" class="form-control"
                                            placeholder="Phone*">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comments" id="comments" rows="2" class="form-control"
                                            placeholder="Special Requests" spellcheck="false"></textarea>
                                    </div>
                                    <div class="contact-us-btn d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact section -->

        <!-- Start Address Section -->
        <section class="contact-us-address-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="single-address-item text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('contents') }}/website/images/phone-call.svg" alt="Phone-icon">
                                    <h4 class="card-title mt-30 mb-15">Address</h4>
                                    <p class="card-text">+37462 7864 3728</p>
                                    <p class="card-text">+7347 3827 37421</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-address-item text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('contents') }}/website/images/location.svg" alt="Phone-icon">
                                    <h4 class="card-title mt-30 mb-15">Location</h4>
                                    <p class="card-text">85 Bay Meadows Drive Woodstock, GA 30188, Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-address-item text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('contents') }}/website/images/send-mail.svg" alt="Phone-icon">
                                    <h4 class="card-title mt-30 mb-15">Email</h4>
                                    <p class="card-text">boomdevs@boomdevs.com</p>
                                    <p class="card-text">info@boomdevs.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Address Section -->

    </main>
@endsection