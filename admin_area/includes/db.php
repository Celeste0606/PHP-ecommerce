<?php
//create a connection for entire page
$con = mysqli_connect("localhost","celeste1_yoginam","Welcome305","celeste1_yogi");
if (mysqli_connect_errno())
{
	echo "The connection was established" . mysqli_connect_error();
}
?>