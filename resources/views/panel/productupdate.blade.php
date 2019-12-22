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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            <div class="container mt-5">
                <div class="row mx-auto">
                    <div class="offset-md-3 col-md-5">
                        <form action="{{url('product/update', $product->id)}}" method="post">
                            @csrf
							<div class="form-group">
                                <input  class="form-control" value="{{$product->pname}}" type="text" name="pname" placeholder="Product name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Product name*'" required class="common-input mt-20">
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{$product->description}}" name="description" placeholder="Description*" onfocus="this.placeholder=''" class="form-control" onblur="this.placeholder = 'Description*'" required class="common-input mt-20">
                            </div>
							
							<div class="form-group mb-3">
								<select name="category" value="{{$product->category}}" class="mt-3 form-control">
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
								<input type="text" name="price" value="{{$product->price}}"  class="form-control">
							</div>
							<div class="form-group">
								<input type="file" name="image" value="{{$product->image}}"  class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Product Store</button>
						</form>
                        </form>
                    </div>
                </div>
            </div>
		
			
            <!-- End footer Area -->	
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	

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