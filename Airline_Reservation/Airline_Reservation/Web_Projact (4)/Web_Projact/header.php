<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<!--------------------------------header--------------------------------->
 <header>
 <nav>
 <ul>
 <li><a href="home.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>">Home</a></li>
 <li><a href="about_us.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>">About Us</a></li>
 <div id="logo"><img src="log/logo2.png" id="logo" ></div>
 <li><a href="ContactPage.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>">Contact Us</a></li>
 <li><a href="hotelPage.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>">Search</a></li>
 </ul>
 </nav>
 
 <div id="loginReg">
	 <?php if(!isset($_GET['true'])){ ?>
 	<button id="butloginReg" onclick="visbl()"><a href="home.php">login/Register</a></button>
	 <?php } ?>
	<img src="log/login1.png" id="loginImg" >
 </div>
 
 </header>