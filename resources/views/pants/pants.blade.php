@extends('index')
@section('title','Pants')
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
                            <h1>Pants</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('index')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href={{url('pants')}}>Pants</a>
                                 
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->
<section class="container">
    <!-- Start Filter Bar -->
                        <div class="filter-bar d-flex flex-wrap align-items-center">
                           <div class="col-md-2 col-sm-2">Categories</div>
                            <div class="sorting">
                                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="{{url('casualpants')}}">Casual Pants</a></li>
                                <li><a href="{{url('sweatpants')}}">Sweat Pants</a></li>
                                <li><a href="{{url('skinnypants')}}">Skinny Pants</a></li>
                                                                    
                            </ul>
                          </div>                        
                    </div>
                </nav>
                </div>
            </div><br>
            <!-- End Filter Bar -->
            
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6 single-product">
                          <div class="content">
                              <div class="content-overlay"></div>
                                 <img class="content-image img-fluid d-block mx-auto" src="/products/{{$product->image}}" alt="">
                              <div class="content-details fadeIn-bottom">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="primary-btn text-uppercase"><a href="{{url('b1')}}">Buy Now</a></button>
                                       
                                    </div>
                              </div>
                          </div>
                          <div class="price">
                                <h5 class="text">{{$product->pname}}</h5>
                                <h3 class="text">{{$product->price}}</h3>
                           </div>
                        </div>  
                        @endforeach
                    </div>
</section>
