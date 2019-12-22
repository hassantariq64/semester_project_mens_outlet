@extends('index')
@section('title','login')
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
                            <h1>Login or Register</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="{{url('/')}}">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

		<!-- Start My Account -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="login-form">
						<h3 class="billing-title text-center">Login</h3>
						<p class="text-center mt-80 mb-40">Welcome back! Sign in to your account </p>
						<form action="{{url('/loginuser')}}" method="POST">
							@csrf
							<input type="text" name="email" placeholder="Username or Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username or Email*'" required class="common-input mt-20">
							<input type="password" name="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">
							<button class="view-btn color-2 mt-20 w-100"><span>Login</span></button>
							<div class="mt-20 d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center"><input type="checkbox" class="pixel-checkbox" id="login-1"><label for="login-1">Remember me</label></div>
								<a href="#">Lost your password?</a>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="register-form">
						<h3 class="billing-title text-center">Register</h3>
						<p class="text-center mt-40 mb-30">Create your very own account </p>
						<form action="{{url('/submit')}}" method="post">
							@csrf
							<input type="text" placeholder="Full name*" onfocus="this.placeholder=''" name="name" onblur="this.placeholder = 'Full name*'" required class="common-input mt-20">
							<input type="email" placeholder="Email address*" onfocus="this.placeholder=''" name="email" onblur="this.placeholder = 'Email address*'" required class="common-input mt-20">
							<input type="text" placeholder="Phone number*" onfocus="this.placeholder=''" name="phone_number" onblur="this.placeholder = 'Phone number*'" required class="common-input mt-20">
							<input type="text" placeholder="Username*" onfocus="this.placeholder=''" name="username" onblur="this.placeholder = 'Username*'" required class="common-input mt-20">
							<input type="password" placeholder="Password*" onfocus="this.placeholder=''" name="password" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">
							<button class="view-btn color-2 mt-20 w-100" type="submit"><span>Register</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End My Account -->
