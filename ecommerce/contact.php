<!DOCTYPE>
<html>
	<head>
		<title>YOGiNAM | Organic Cotton Clothing and Products</title>
		<link rel="icon" type="img/jpg" href="favicon (3).ico">
		
		<link rel="stylesheet" href="styles/main.css" media="all" />
		
		<?php
			include("functions/functions.php");
		?>

		<a id="webform_side_tab">Subscribe</a><script type="text/javascript" src="https://madmimi.com/signups/152564/webform_side_tab.js"></script>
	</head>
	<body>
	<!--main wrapper -->
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

			</div><!--end nav -->
			<div id="logo" alt="banner"><a href="index.php"><img src="images/bg1.JPG"></a><a href="#"><img class="facebook" src="images/1430869930_Facebook-48.png" alt="facebook-social"></a><a href="#"><img class="twitter" src="images/1430869992_Twitter-48.png" alt="twitter-social"></a><a href="#"><img class="google" src="images/1430870084_Googleplus-48.png" alt="google-social"></a>
				
			</div>
		<div class="wrapper">
		  <!--header -->
			<div class="header">
				
			
			
			</div><!--end header -->
			
			
		<div class="form-wrapper">

			<div id="contact-form">
				<form action="mail.php" method="POST" enctype="multipart/form-data" target="_blank" accept-charset="UTF-8" autocomplete ="off" novalidate>
					<label>First name:</label><br>
					<input type="text" name="firstname" placeholder="First Name" required />
					<br>
					<label>Last name:</label><br>
					<input type="text" name="lastname" placeholder="Last Name" required />
					<br>
					<label>Phone:</label>
					<input type="tel" placeholder="Phone Number" name="phone" id="phone">
					<br>
					<label>E-mail</label>
					<input type="email" placeholder="youremail@gmail.com" name="email" id="email" required />
					<br>
					<label>Subject:</label>
					 <input type="text" name="Subject" placeholder="Subject" required />
					 <br>
					 <textarea name="Message" cols="20" rows="5" required="required" placeholder="Message"></textarea>
					 <br>
					
					<input id="submit" type="submit" name="Submit" value="Send">
				</form>
			</div><!--end contact form-->
		</div>		

			<!--footer -->
			<div id="footer">
				<li><h2>&copy; 2015 by: <i>Lotus Designs<i></h2></li>
				<li><a href="tel:+17864084889" title="786-408-4889" class="phone">1-800-YOGiNAM</a></li>
			</div><!--end footer -->
			
		</body>
	</div><!--end main wrapper-->
</html>