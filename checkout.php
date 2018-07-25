<!DOCTYPE>
<?php 
session_start();
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
					<div id="sidebar_title">Clothing</div>
						<ul id="cats">
							<?php getCats(); ?>
						<ul>
					
					<div id="sidebar_title">Products</div>
						<ul id="cats">
							<?php getBrands(); ?>
						<ul>
						
				</div><!--end sidebar -->
			
				<!--content2 -->
				<div id="content2">



					<div class="content"> 

					<?php cart(); ?>

					<div id="shopping_cart">
						
						<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:#2d084e;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					
					<b style="color:#2d084e">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:#2d084e">Go to Cart</a>
					
					
					
					</span>
						
					</div>

						
					<div id="products_box">
						
				<?php 
				if(!isset($_SESSION['customer_email'])){
					
					include("customer_login.php");
				}
				else {
				
				include("payment.php");
				
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