@extends('index')
@section('title','Belts')
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
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Belts</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('/')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

             <!-- Start Product Details -->
            <div class="container">
                <div class="product-quick-view">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="quick-view-content">
                                <div class="top">
                                    <h3 class="head">Product 3</h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$12.00</span></div>
                                    <div class="available">Availibility: <span>In Stock</span></div>
                                </div>
                                <div class="middle">
                                    <p class="content">Cowhide genuine leather belts for men male pin buckle jeans Waist Belt Mens black brown two sides color Belt ceinture homme.</p>
                                </div>
                                <div >
                                    <div class="quantity-container d-flex align-items-center mt-15">
                                        Quantity:
                                        <input type="text" class="quantity-amount ml-15" value="1" />
                                        <div class="arrow-btn d-inline-flex flex-column">
                                            <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                            <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                        </div>

                                    </div>
                                    <div class="d-flex mt-20">
                                        <a href="{{url('checkout')}}" class="view-btn color-2"><span>Buy Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="details-tab-navigation d-flex justify-content-center mt-30">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Description</a>
                        </li>
                        <li>
                            <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification">Specification</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
                        <div class="description">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
                        <div class="specification-table">
                            <div class="single-row">
                                <span>Brand</span>
                                <span>Bold</span>
                            </div>
                            <div class="single-row">
                                <span>Gender</span>
                                <span>Men</span>
                            </div>
                            <div class="single-row">
                                <span>Model no</span>
                                <span>F1200</span>
                            </div>
                            <div class="single-row">
                                <span>Width</span>
                                <span>124mm</span>
                            </div>
                            <div class="single-row">
                                <span>Quality checking</span>
                                <span>Yes</span>
                            </div>
                            <div class="single-row">
                                <span>Style</span>
                                <span>Fashion</span>
                            </div>
                            <div class="single-row">
                                <span>Pattern Type</span>
                                <span>Solid</span>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- End Product Details -->