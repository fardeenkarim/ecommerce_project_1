@extends('layouts.web-layout')
@section('content')
<main>
    <!-- Start Contact Breadcrumb section -->
        <section class="shop-version-one-breadcrumb-section">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-lg-6 col-12">
                        <div class="breadcrumb-content">
                            <h3 class="sub-title">Shop</h3>
                            <h2 class="mt-10 mb-20">Our Shop</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <nav class="mt-30" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Breadcrumb section -->

        <!-- Start Shop Version one section -->
        <section class="shop-version-one-section">
            <div class="container">
                <div class="shop-topbar-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-12">
                            <div class="shop-topbar-left-item">
                                <div class="product-category-selector">
                                    <div class="form-group">
                                        <select id="select-category">
                                            <option>Category</option>
                                            <option>Breakfast</option>
                                            <option>Dinner</option>
                                            <option>Lunch</option>
                                            <option>Restaurant</option>
                                            <option>Vegetables</option>
                                            <option>Beverage</option>
                                            <option>Italian</option>
                                        </select>
                                        <div class="product-category-selector-icon">
                                            <img src="{{ asset('contents') }}/website/images/angle-down.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-topbar-text">
                                    <p>Showing 1-6 of 33 results</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="shop-topbar-right-item">
                                <div class="search-form">
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <div class="search-btn">
                                                <button type="submit" class=" btn btn-secondary"><img src="{{ asset('contents') }}/website/images/search.svg" alt="Search Icon">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-version-one-product-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-1.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$85</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-2.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$55</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-3.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$65</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-4.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$75</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-5.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$85</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-6.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$45</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-7.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$85</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-8.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$55</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-9.png" alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$85</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-10.png"
                                        alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$55</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-11.png"
                                        alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$65</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="shop-version-one-single-product-item mb-30">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('contents') }}/website/images/product-v1-12.png"
                                        alt="Product Images">
                                    <div class="card-body">
                                        <div class="product-title-price">
                                            <h4 class="card-title">Rice Mushrooms Plate</h4>
                                            <span>$45</span>
                                        </div>
                                        <p class="card-text">Vegetables salad</p>
                                        <div class="card-icon mt-20">
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
                    <!-- Shop Pagination -->
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><img
                                                src="{{ asset('contents') }}/website/images/angle-left.svg" alt="angle-left"></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link active" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><img
                                                src="{{ asset('contents') }}/website/images/angle-right.svg" alt="angle-right"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Version one section -->

    </main>
@endsection