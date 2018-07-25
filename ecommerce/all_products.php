<!DOCTYPE><!--all_products.php-->
<?php 

include("functions/functions.php");

?>
<html>
	<head>
		<title>YOGiNAM | Organic Cotton Clothing and Products</title>
		<link rel="icon" type="img/jpg" href="favicon (3).ico">
		
		<link rel="stylesheet" href="styles/main.css" media="all" />
		
	</head>
	<body>
		<!--nav -->
			<div class="nav">
				<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About Us</a></li>	
				</ul>

				<!--search bar-->
				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search"></input>
						<input type="submit" name="search" value="Go"></input>
					</form>
				</div>
				<!--end search bar-->
				
			</div><!--end nav -->
			<div id="logo" alt="banner"><a href="index.php"><img src="images/bg1.JPG"></a><a href="#"><img class="facebook" src="images/1430869930_Facebook-48.png" alt="facebook-social"></a><a href="#"><img class="twitter" src="images/1430869992_Twitter-48.png" alt="twitter-social"></a><a href="#"><img class="google" src="images/1430870084_Googleplus-48.png" alt="google-social"></a>
				
			</div>

	<!--main wrapper -->
		<div class="wrapper">
		  <!--header -->
			<div class="header">
				
				

			</div><!--end header -->

			
			<!--content -->
			<div class="content">
				
				<!--sidebar -->
				<div id="sidebar">
					<div id="sidebar_title">Categories</div>
						<ul id="cats">
							<?php getCats(); ?>
						<ul>
					
					<div id="sidebar_title">Brands</div>
						<ul id="cats">
							<?php getBrands(); ?>
						<ul>
						
				</div><!--end sidebar -->
			
				<!--content2 -->
				<div id="content2">
					<div class="content"> 
						<?php cart(); ?>

					    <div id="shopping_cart">
						
						 <span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:#2d084e;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:#2d084e">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:#2d084e">Go to Cart</a>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:yellow;'>Login</a>";
					
					}
					else {
					echo "<a href='customer/logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
						
					    </div>
					 	
					    <div id="products_box">

					    <?php
					    	$get_pro = "select * from products";//select statment that gets all the products in the product table

							$run_pro = mysqli_query($con, $get_pro);

							while ($row_pro = mysqli_fetch_array($run_pro)){

									$pro_id = $row_pro['product_id'];
									$pro_cat = $row_pro['product_cat'];
									$pro_brand = $row_pro['product_brand'];
									$pro_title = $row_pro['product_title'];
									$pro_price = $row_pro['product_price'];
									$pro_image = $row_pro['product_image'];

						echo "

						<div id = 'single_product'>

							<h3>$pro_title</h3>

							<img src='admin_area/product_images/$pro_image' width='180' height='180' />

									<p><b>$ $pro_price</b></p>

										<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a><br>
										<a href='index.php?pro_id=$pro_id'><button style='float:left;'>Add to Cart</button></a>


						</div>	

							";

						   }
						?>
						
					    </div>
				   </div>
			
				</div><!--end content2 -->

			</div><!--end content -->
			
			

			<!--footer -->
			<div id="footer">
			  <ul>
				<li><h2>&copy; 2015 by: <i>Lotus Designs<i></h2></li>
				<li><a href="tel:+17864084889" title="786-408-4889" class="phone">1-800-YOGiNAM</a></li>
				
			  </ul>	
			</div><!--end footer -->
			
		
		
		
		</div><!-- end main wrapper -->
	</body>
</html>