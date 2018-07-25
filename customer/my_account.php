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
				<li><a href="../index.php">Home</a></li>
				<li><a href="../all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="../customer_register.php">Sign Up</a></li>
				<li><a href="../cart.php">Shopping Cart</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
				<li><a href="../about.php">About Us</a></li>	
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
			<div id="logo" alt="banner"><a href="../index.php"><img src="images/bg1.JPG"></a><a href="#"><img class="facebook" src="images/1430869930_Facebook-48.png" alt="facebook-social"></a><a href="#"><img class="twitter" src="images/1430869992_Twitter-48.png" alt="twitter-social"></a><a href="#"><img class="google" src="images/1430870084_Googleplus-48.png" alt="google-social"></a>
				
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
				<div id="sidebar_title">My Account:</div>
				
				
				<ul id="cats">
				<?php 
				$user = $_SESSION['customer_email'];
				
				$get_img = "select * from customers where customer_email='$user'";
				
				$run_img = mysqli_query($con, $get_img); 
				
				$row_img = mysqli_fetch_array($run_img); 
				
				$c_image = $row_img['customer_image'];
				
				$c_name = $row_img['customer_name'];
				
				echo "<p style='text-align:center;margin-bottom: 103px;'><img src='customer_images/$c_image' width='150' height='150'/></p>";
				
				?>
				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="../logout.php">Logout</a></li>
				
				<ul>
				
				</div>
					
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;
					
					}
					?>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				
				
				<?php 
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<h2 style='padding:20px;'>Welcome:  $c_name </h2>
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				if(isset($_GET['my_orders'])){
				include("my_orders.php");
				}
				
				?>
				

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