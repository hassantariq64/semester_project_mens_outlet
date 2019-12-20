@extends('index')
@section('title','Confirmation')
@section('slider')
@endsection
@section('products')
@endsection
@section('about')
@endsection
@section('contact')
@endsection
@section('brand')
@endsection
@parent

 <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Confirmation</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href={{url('index')}}>Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

<!-- Start Checkout Area -->
        <div class="container">
            <p class="text-center">Thank you. Your order has been received.</p>
            <div class="row mt-50">
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Order Info</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Order number</td>
                            <td>: 60235</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>: Oct 03, 2017</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>: USD 2210</td>
                        </tr>
                        <tr>
                            <td>Payment method</td>
                            <td>: Check payments</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Billing Address</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Street</td>
                            <td>: 56/8 Gulafshan</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>: Jhelum</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>: PAkistan</td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td>: 49600</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="billing-title mt-20 pl-15">Shipping Address</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Street</td>
                            <td>: 56/8 Gulafshan</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>: Jhelum</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>: PAkistan</td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td>: 49600</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Checkout Area -->