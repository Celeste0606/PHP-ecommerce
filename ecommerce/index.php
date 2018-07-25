<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>YOGiNAM | Organic Cotton Clothing and Products</title>
		<link rel="icon" type="img/jpg" href="favicon (3).ico">
		<link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="styles/main.css" media="all" />
	
		<meta name="description" content="Experience the soft feeling of Organic yoga clothing and products!">
    <meta name="keywords" content="Yoginam, Organic cotton farming, What is Organic cotton?, Organic cotton distributor, Organic cotton wholsaler, Coral Gables, Pinecrest, Palmetto Bay, Dadeland, Kendall, South Miami, Miami-Dade, Miami, Florida, FL">
	</head>
	<body>

		<!--nav -->
		<header class="top" role="header">
        <div class="container">
            <a href="index.php" class="navbar-brand pull-left">
                <img src="images/bg1.JPG" alt="logo">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
            <nav class="navbar-collapse collapse" role="navigation">
                <ul class="navbar-nav nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
			
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About Us</a></li>	
				

				<!--search bar-->
				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search"></input>
						<input type="submit" name="search" value="Go"></input>
					</form>
				</div>
				<!--end search bar-->
				
			
			<div><a href="#"><img class="facebook" src="images/1430869930_Facebook-48.png" alt="facebook-social"></a><a href="#"><img class="twitter" src="images/1430869992_Twitter-48.png" alt="twitter-social"></a><a href="#"><img class="google" src="images/1430870084_Googleplus-48.png" alt="google-social"></a>
				
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



					<!-- <?php echo $ip=getIp() ;?> test user ip address-->
						
					<div id="products_box">
						
						<?php getPro(); ?><!-- if not product is selected, this line will run -->
						<?php getCatPro(); ?><!-- if a product is selected this line will run assigning each category an id.-->
						<?php getBrandPro(); ?>
				
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