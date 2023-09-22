@extends('layouts.web-layout')
@section('content')
<main>
    <!-- Start Shop Breadcrumb section -->
        <div class="shop-breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav class="mt-30" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Breadcrumb section -->

        <!-- Return customer & coupon section -->
        <div class="checkout-alert-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-alert">
                            <div class="alert alert-warning" role="alert">
                                <img src="{{ asset('contents') }}/website/images/warning.svg" alt="alert" />
                                Returning customer?
                                <a href="login.html" class="alert-link">Click here to login</a>
                            </div>
                        </div>
                        <div class="login-alert mt-30">
                            <div class="alert alert-warning" role="alert">
                                <img src="{{ asset('contents') }}/website/images/warning.svg" alt="alert" />
                                Have a coupon?
                                <a href="#" class="alert-link">Click here to enter your code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Return customer & coupon section -->

        <!-- checkout Form -->
        <section class="checkout-form-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Billing Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <!-- Checkout Form -->
                        <div class="checkout-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="firstname"
                                            placeholder="First Name*" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="lastname"
                                            placeholder="Last Name*" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="companyname"
                                        placeholder="Your Company name*" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email*" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="phone" placeholder="Your Phone*" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country"></label>
                                    <select class="form-control select2" id="country">
                                        <option>Country*</option>
                                        <option>USA</option>
                                        <option>Uk</option>
                                        <option>Canada</option>
                                        <option>Bangladesh</option>
                                    </select>
                                    <div class="country-selector-icon">
                                        <img src="{{ asset('contents') }}/website/images/angle-down.svg" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="address" placeholder="Address*" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="city" placeholder="City/Town*" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control select2" id="district">
                                            <option>District*</option>
                                            <option>Bogura</option>
                                            <option>Bogura</option>
                                            <option>Bogura</option>
                                        </select>
                                        <div class="district-selector-icon">
                                            <img src="{{ asset('contents') }}/website/images/angle-down.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="Postcode"
                                            placeholder="Postcode/Zip *" />
                                    </div>
                                </div>
                                <label class="form-check-label">Create an account?
                                    <input type="radio" name="name" class="form-check-input">
                                    <span class="checkmark">optional</span>
                                </label>
                                <p>
                                    Create an account by entering the information below. If you
                                    are a returning customer please login at the top of the page.
                                </p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="password*" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="comment" id="comment" rows="1" class="form-control"
                                        placeholder="Shipping Detail" spellcheck="false"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="comments" id="comments" rows="2" class="form-control"
                                        placeholder="Additional Information" spellcheck="false"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Order Details -->
                    <div class="col-lg-5 col-12">
                        <div class="order-details">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Products</th>
                                            <th scope="col">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sausage Fried Rice</td>
                                            <td>$45</td>
                                        </tr>
                                        <tr>
                                            <td>Fried Pork With Garlic</td>
                                            <td>$45</td>
                                        </tr>
                                        <tr>
                                            <td>Shrimp With Rice Noodles</td>
                                            <td>$45</td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td>$135</td>
                                        </tr>
                                        <tr>
                                            <td>Coupon</td>
                                            <td>$35</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>$100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout-payment-method">
                                <h3>Payment Method</h3>
                                <label class="form-check-label">Direct Bank Transfer
                                    <input type="radio" name="cat-name" class="form-check-input">
                                    <span class="checkmark">optional</span>
                                </label>
                                <label class="form-check-label">Check Payment
                                    <input type="radio" name="cat-name" class="form-check-input">
                                    <span class="checkmark">optional</span>
                                </label>
                                <label class="form-check-label">Cash on Delivery
                                    <input type="radio" name="cat-name" class="form-check-input">
                                    <span class="checkmark">optional</span>
                                </label>
                                <label class="form-check-label">Paypal
                                    <input type="radio" name="cat-name" class="form-check-input">
                                    <span class="checkmark">optional</span>
                                </label>
                                <div class="checkout-btn">
                                    <button class="btn btn-primary">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout Form -->

    </main>
@endsection