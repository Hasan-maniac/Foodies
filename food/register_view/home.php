<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="../jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	</head>
	
	<?php
		session_start();

	?>	

	<?php
	include("include/config.php");
		if( $_GET)
		{
			echo "<h3 align=center>Welcome ".$no = $_GET['name'];
			echo "</h3>";
			$sq="select * from customer where username='$no'";
			$ret=mysql_query($sq);
			//var_dump($sq);
	
			$ro= mysql_fetch_array($ret);
				$_SESSION['username']= $ro['username'];
				//$_SESSION['fullname']= $row['user_name'];
		}			
		else
			;
	?>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="home.php" class="current" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
	       <li><a href="reservation.php">Reserve</a></li>
            <li><a href="reviews.php">Review</a></li>
             <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
           <a href="logout.php"><input type="button" class="button" name="logout" value="logout" > <br>
            
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
        <div class="pikachoose">
          <ul id="pikame">
            <li><a href=""><img src="../images/home/1.jpg" alt="" /></a></li>
            <li><a href=""><img src="../images/home/2.jpg" alt="" /></a></li>
            <li><a href=""><img src="../images/home/3.jpg" alt="" /></a></li>
            <li><a href=""><img src="../images/home/4.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="border"></div>
        <div class="home-widget">
          <h3>About Foodies_World</h3>
          
          <p>We are new in the city but with the motto to serve the the people with our best possible quality food. We also guarantee the we will serve you such that you can never complain.</p>
        </div>
        <div class="home-widget">
          <h3>Special Offers</h3>
          
          <p align="center"><img src="../images/home/3.jpg" width="300px">
		  	Previous Cost: tk. 300<br>
			New Cost: tk. 250
		  </p>
        </div>
        <div class="home-widget">
          <h3>We Are Social!</h3><br><br><br>
          <div id="social"> <a href="http://twitter.com/priteshgupta" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com/priteshgupta" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a></div>
        </div>
       
              
      <footer>
        <div class="border"></div>
             <br />
       
        <center>&copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>      
<div class="border"></div>
             <br />

</footer>
    </div>
</body>
</html>
