<?php
 $host="localhost:3307";
 $user ="root";
 $password ="";
 $db = "your_flight";

 $con=mysqli_connect($host,$user,$password,$db);

 if (mysqli_connect_errno()>0) {
 	echo mysql_connect_error($con);
 } else {
 	
 }
?>