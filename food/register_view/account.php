<!DOCTYPE HTML>
<html>
	<head>
            
       
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="../scripts/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	
	</head>
	<?php
	session_start();
	$name=$_SESSION['username'];
        include("../include/config.php");
      $query="SELECT * FROM customer WHERE username='$name'";
$retval = mysql_query($query);
$info=mysql_fetch_array($retval);

	 ?>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="reservation.php">Reserve</a></li>
            <li><a href="reviews.php">Review</a></li>
            <li><a href="account.php" class="current">Account</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
		
			<a href="logout.php"><input type="button" class="button" name="logout" value="logout"></a><br>
			
			
          <span class="reservations-title">Call Us:</span>
          <hr class="hr-solid" />
          <span style="font-family: 'Lobster13Regular', cursive;">+88 01675784282</span>
          <hr class="hr-dashed" />
          <div style="margin-top:15px"> <a class="button" href="mailto:bipasha03@gmail.com ? subject=sweetwords">Or Email Us</a> </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
      </header>
      <div class="wrapper">
        <div class="username" align="left">
          


		
		<h5>
	  	<a href="myaccount.php">My Account</a><br>
		<a href="my_cart.php">My Cart</a><br>
		<a href="my_order.php">My Orders</a><br>
		<a href="reservenoti.php">My Reservations</a>
		</h5>
		
		
                  
		  
        </div>
		<br>
        <div class="clear"></div>
        <div class="border"></div>
      <footer>
        <div class="border"></div>
             <br />
        <center> &copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>      
<div class="border"></div>
             <br />
</footer>
    </div>
</body>
</html>