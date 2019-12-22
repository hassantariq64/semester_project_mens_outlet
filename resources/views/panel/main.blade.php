<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="CodePixar">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Men's Outlet Admin @yield('title')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
		    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			@section('header')
			<header class="default-header">
				<div class="menutop-wrap banner-area">
					<div class="menu-top container">
						<div class="d-flex justify-content-between align-items-center">

							<ul class="list">
								
								<li><a href="tel:+92-332-093619">+92-332-0953619</a></li>
								<li><a href="mailto:mensoutlet64@gmail.com">mensoutlet64@gmail.com</a></li>
							</ul>
								<ul class="list">
								<li>
									@if(Auth::user())
										<a href="#">Welcome {{Auth::user()->name}}</a>
									@endif

								</li>	
								<li class="text-right"><a href="" data-toggle="modal" data-target="#logout"> <i  class="fa fa-fw fa-log-out"></i>  Logout</a></li>							
							</ul>
						</div>
					</div>					
				</div>
				@show
				<!-- Start Navbar -->
				@section('navbar')
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="#home">
						  	<!-- <img src="img/logo.png" alt=""> -->
						  </a>
						  <a class="navbar-brand" href="{{url('/main')}}">
						  	<h1>MEN'S OUTLET</h1>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						
						  </div>						
					</div>
				</nav>
				<hr>
				@show
				<!-- End navbar -->
			</header>
			@show
			<!-- End Header Area -->

			<!-- start banner Area -->
			@section('slider')
			<section class="banner-area organic-breadcrumb">
				
            </section>
			@show
			<!-- End banner Area -->	

				<!-- start Logout Model -->
				<div class="modal" id="logout">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Logout</h3>
						</div>
						<div class="modal-body">
							<form action="{{url('/custom-logout')}}" method="post">
								@csrf
								<button type="submit" class="btn btn-danger">Logout</button>
							</form>
						</div>
					</div>
				</div>
			<!-- end Logout Model -->


			<!-- Products Area -->
			@section('data')
			<div class="container" style="margin-top: 120px;">
                <div class="details-tab-navigation d-flex justify-content-center mt-30">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Products</a>
                        </li>
                        
					</ul>
					
				</div>
				<hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
                        <div class="description">
                            <!-- Products Table Start -->
                            <div class="container">
                            	<table class="table table-striped">
                            		<thead>
                            			<th>#</th>
										<th>Product Name</th>
										<th>Product Description</th>
                            			<th>Category</th>
                            			<th>Price</th>
										<th>Edit</th>
										<th>Delete</th>
									</thead>
									<tbody>
										@foreach($products as $product)
										<tr>
											<td>{{$product->id}}</td>
											<td>{{$product->pname}}</td>
											<td>{{$product->description}}</td>
											<td>{{$product->category}}</td>
											<td>{{$product->price}}</td>
											<td>
												<a href="{{url('product/edit',$product->id)}}" class="btn btn-success">Edit</a>
											</td>
											<td>
												<a href="{{url('/product/delete',$product->id)}}" class="btn btn-danger">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
                            	</table>
                            	<div class="container">
                            	<button class="view-btn color-2 mt-20 w-100" data-toggle="modal" data-target="#addproduct"><span>Add New Product</span></button>
                            	</div>
                            </div>
                            <!-- Products Table End -->

                        </div>
                    </div>

	<!-- modal start -->
	<div class="modal fade" id="addproduct">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add New Product</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					@csrf
					<div class="register-form">
						<h3 class="billing-title text-center">Add New Product</h3>
						<p class="text-center mt-40 mb-30"></p>
						<form action="/product/store" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="text" name="pname" placeholder="Product name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Product name*'" required class="common-input mt-20">
							<input type="text" name="description" placeholder="Description*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Description*'" required class="common-input mt-20">
							<div class="form-group mb-3">
								<select name="category" class="mt-3 form-control">
									<option>Category</option>
									<option>Belts</option>
									<option>Blazers</option>
									<option>Hoodies</option>
									<option>Leather Jackets</option>
									<option>Woolen Jackets</option>
									<option>Casual Pants</option>
									<option>Skinny Pants</option>
									<option>Sweat Pants</option>
									<option>Reading Shades</option>
									<option>Sunglasses</option>
									<option>Casual Shirts</option>
									<option>Dress Shirts</option>
									<option>T-Shirts</option>
									<option>Tuxedo Shirts</option>
									<option>Boots</option>
									<option>Casual Shoes</option>
									<option>Formal Shoes</option>
									<option>Loafers</option>
									<option>Oxfords</option>
									<option>Wallets</option>
									<option>Digital Watches</option>
									<option>Mechanical Watches</option>
									<option>Quartz Watches</option>
									<option>Sports Watches</option>
								</select>
	
							</div>
							
							
							<div class="form-group">
								<input type="text" name="price"  class="form-control" placeholder="Price in $">
							</div>
							<div class="form-group">
								<input type="file" name="image"  class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Add Product</button>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" >Cancel</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal -->
	<!-- modal start -->
	<div class="modal fade" id="success">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<h3 class="text-success">Your product has been added...</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal -->


                    <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
                        <div class="specification-table">
			
			<!-- End products Area -->
			@section('footer')		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									We are providng you the amazing men's apparels and accessories of the best quality.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
					
				</div>
			</footer>	
			@show
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/ion.rangeSlider.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>			
			<script src="js/main.js"></script>	
			
		</body>
	</html>