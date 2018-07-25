<?php

$from="ecncommunication@gmail.com";	
$email="ecncommunication@gmail.com";
$subject=$_POST['Subject'];
$message=$_POST['Message'];


mail ( $email, $subject, $message,"From:".$from);

Print "Your message has been sent<a href='index.php'>Go back to home page</a> or close your browser.";

?>