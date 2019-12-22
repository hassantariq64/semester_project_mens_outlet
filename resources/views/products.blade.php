@extends('index')
@section('title','Products')
@section('slider')
@endsection
@section('products')
@endsection
@section('about')
@endsection
@section('contact')
@endsection
@section('navbar')
@endsection
@section('brand')
@endsection
@parent

<!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb" id="products">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Our Products</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('/')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href={{url('products')}}>Products</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

<!-- Products Area -->
            <section class="category-area section-gap section-gap" id="products">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-40">
                            <div class="title text-center">
                                <h1 class="mb-10">OUR PRODUCTS</h1>
                                <p>We are in extremely love with Fashion.</p><hr>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-lg-8 col-md-8 mb-10">
                            <div class="row category-bottom">
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="content">
                                        <a href="{{url('shirts')}}">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/shirt.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Shirts</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="content">
                                        <a href="{{url('pants')}}">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/pant.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Pants</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content">
                                        <a href="{{url('shoes')}}">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/shoes.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Shoes</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>                                                              
                            </div>                          
                        </div>
                        <div class="col-lg-4 col-md-4 mb-10">
                          <div class="content">
                            <a href="watches">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/watch.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Watches</h3>
                              </div>
                            </a>
                          </div>
                        </div>                  
                    </div>
                </div>  
                <div class="container">                 
                    <div class="row">
                        <div class="col-lg-8 col-md-8 mb-10">
                            <div class="row category-bottom">
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="content">
                                        <a href="jackets">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/jacket.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Jackets</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="content">
                                        <a href="{{url('wallets')}}">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/wallet.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Wallets</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content">
                                        <a href="{{url('belts')}}">
                                          <div class="content-overlay"></div>
                                             <img class="content-image img-fluid d-block mx-auto" src="img/belt.jpg" alt="">
                                          <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Belts</h3>
                                          </div>
                                        </a>
                                    </div>
                                </div>                                                              
                            </div>                          
                        </div>
                        <div class="col-lg-4 col-md-4 mb-10">
                          <div class="content">
                            <a href="{{url('shades')}}">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/glasses.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Shades</h3>
                              </div>
                            </a>
                          </div>
                        </div>                  
                    </div>
                </div>  
            </section>
            <!-- End products Area -->