<?php
$con = mysql_connect("localhost","celeste1_yoginam","Welcome305","celeste1_yogi");
$per_page = 4;
$pages_query = mysql_query("SELECT COUNT('product_id') FROM('products')");


?>