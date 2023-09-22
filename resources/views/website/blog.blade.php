@extends('layouts.web-layout')
@section('content')
<main>
    <!-- Start Menu Breadcrumb section -->
        <section class="blog-version-one-breadcrumb-section">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-lg-6 col-12">
                        <div class="breadcrumb-content">
                            <h3 class="sub-title">Blog</h3>
                            <h2 class="mt-10 mb-20">Our Food Update</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua
                            </p>
                            <nav class="mt-30" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Breadcrumb section -->

        <!-- Start Blog wrapper section -->
        <section class="blog-version-one-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- Start Blog post wrapper -->
                        <div class="blog-post-wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item mb-30">
                                        <div class="card">
                                            <a href="single-blog.html"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-1.png"
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
                                                <a href="single-blog.html">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item mb-30">
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
                                                <a href="#">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item mb-30">
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
                                                <a href="#">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item mb-30">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-4.png"
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
                                                <a href="#">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-5.png"
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
                                                <a href="#">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="single-blog-item">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top" src="{{ asset('contents') }}/website/images/Blog-6.png"
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
                                                <a href="#">
                                                    <h4 class="card-title">Labor Depar rules pro as tweaks overtime</h4>
                                                </a>
                                                <a href="#">Read more <span><img src="{{ asset('contents') }}/website/images/arrow-right.svg"
                                                            alt="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Pagination -->
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
                    </div>
                    <div class="col-lg-4 col-12">
                        <aside>
                            <div class="blog-sidebar">
                                <!-- Blog Search form -->
                                <!-- <div class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search"
                                            aria-label="search-now" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <img src="{{ asset('contents') }}/website/images/search.svg" alt="Search Icon">
                                                <p>Search</p>
                                            </span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="search-form">
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <div class="search-btn">
                                                <button type="submit" class=" btn btn-secondary"><img
                                                        src="{{ asset('contents') }}/website/images/search.svg" alt="Search Icon">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Recent Blog Post -->
                                <div class="recent-post mt-35">
                                    <h4>Recent Posts</h4>
                                    <a href="#">
                                        <div class="recent-post-item mt-30">
                                            <div class="recent-post-thumbnail">
                                                <img src="{{ asset('contents') }}/website/images/recent-post-thumbnail-1.png"
                                                    alt="Recent Post Images">
                                            </div>
                                            <div class="recent-post-content">
                                                <h6>Labor Depar rules tweaks overtime</h6>
                                                <div class="post-meta-item">
                                                    <div class="post-meta">
                                                        <div class="post-date">
                                                            <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                            <p>Dec 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="recent-post-item mt-30">
                                            <div class="recent-post-thumbnail">
                                                <img src="{{ asset('contents') }}/website/images/recent-post-thumbnail-2.png"
                                                    alt="Recent Post Images">
                                            </div>
                                            <div class="recent-post-content">
                                                <h6>Labor Depar rules tweaks overtime</h6>
                                                <div class="post-meta-item">
                                                    <div class="post-meta">
                                                        <div class="post-date">
                                                            <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                            <p>Dec 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="recent-post-item mt-30">
                                            <div class="recent-post-thumbnail">
                                                <img src="{{ asset('contents') }}/website/images/recent-post-thumbnail-3.png"
                                                    alt="Recent Post Images">
                                            </div>
                                            <div class="recent-post-content">
                                                <h6>Labor Depar rules tweaks overtime</h6>
                                                <div class="post-meta-item">
                                                    <div class="post-meta">
                                                        <div class="post-date">
                                                            <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                            <p>Dec 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="recent-post-item mt-30">
                                            <div class="recent-post-thumbnail">
                                                <img src="{{ asset('contents') }}/website/images/recent-post-thumbnail-4.png"
                                                    alt="Recent Post Images">
                                            </div>
                                            <div class="recent-post-content">
                                                <h6>Labor Depar rules tweaks overtime</h6>
                                                <div class="post-meta-item">
                                                    <div class="post-meta">
                                                        <div class="post-date">
                                                            <img src="{{ asset('contents') }}/website/images/clock.svg" alt="clock">
                                                            <p>Dec 19, 2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Recent article Post -->
                                <div class="recent-post-article-list mt-35">
                                    <h4>Recent Article</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/angle-right.svg"
                                                    alt="angle-right">Chicken Tinga
                                                Nachos</a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/angle-right.svg" alt="angle-right">Sweet
                                                and Sour
                                                Pork Chops</a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('contents') }}/website/images/angle-right.svg" alt="angle-right">Green Chile
                                                And
                                                Chicken Stew
                                            </a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('contents') }}/website/images/angle-right.svg" alt="angle-right">Pecan Pie
                                                Macarons
                                            </a></li>
                                        <li><a href="#">
                                                <img src="{{ asset('contents') }}/website/images/angle-right.svg" alt="angle-right">Brazilian
                                                Burger
                                                With Egg
                                            </a></li>
                                    </ul>
                                </div>
                                <!-- Blog Post tag -->
                                <div class="post-tag mt-35">
                                    <h4>Tags</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="btn btn-light">Beef</a></li>
                                        <li><a href="#" class="btn btn-light">Class</a></li>
                                        <li><a href="#" class="btn btn-light">Healthy</a></li>
                                        <li><a href="#" class="btn btn-light">Seafood</a></li>
                                        <li><a href="#" class="btn btn-light">Snacks</a></li>
                                        <li><a href="#" class="btn btn-light">Soups</a></li>
                                        <li><a href="#" class="btn btn-light">Spicy</a></li>
                                        <li><a href="#" class="btn btn-light">Grill</a></li>
                                    </ul>
                                </div>
                                <!-- Blog Post Social Shere -->
                                <div class="post-social-shere mt-35">
                                    <h4>Follow Us</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/facebook.svg"
                                                    alt="Facebook">Facebook</a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/twitter.svg" alt="Twitter">Twitter</a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/pinterest.svg"
                                                    alt="Pinterest">Pinterest</a></li>
                                        <li><a href="#"><img src="{{ asset('contents') }}/website/images/linkedin.svg"
                                                    alt="Linkedin">Linkedin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog wrapper section -->

    </main>
@endsection