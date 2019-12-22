@extends('index')
@section('title','Wallets')
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
                            <h1>Wallets</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('/')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href={{url('wallets')}}>Wallets</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->
<section class="container">
    <!-- Start Filter Bar -->
                        <div class="filter-bar d-flex flex-wrap align-items-center">
                           <div class="col-md-2 col-sm-2">Wallets</div>
            </div><br>
            <!-- End Filter Bar -->
            
    <div class="row">
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l1.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="primary-btn text-uppercase"><a href="{{url('b1')}}">Buy Now</a></button>
                                       
                                    </div>
                              </div>
                          </div>
                          <div class="price">
                                <h5 class="text">Belt 1</h5>
                                <h3 class="text">$15.00</h3>
                           </div>
                        </div>  
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l2.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="primary-btn text-uppercase"><a href="{{url('b2')}}">Buy Now</a></button>
                                       
                                    </div>
                              </div>                          
                          </div>
                          <div class="price">
                                <h5 class="text">Belt 2</h5>
                                <h3 class="text">$12.00</h3>
                           </div>                             
                        </div>  
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="img/l3.jpg" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                       <button class="primary-btn text-uppercase"><a href="{{url('b3')}}">Buy Now</a></button>
                                        
                                    </div>
                              </div>                          
                          </div>
                          <div class="price">
                                <h5 class="text">Long Sleeve shirt</h5>
                                <h3 class="text">$12.00</h3>
                           </div>                             
                        </div>  
                    </div>
</section>