<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<?php
session_start();
include("../include/config.php");
//echo $_SESSION['username'];
?>

<body>
<div id="container">
  <header>
         <nav>
          <ul id="nav">
            <li><a href="../index.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
			 <li><a href="login.php">Login</a></li>
			 <li><a href="reviews.php"  class="current">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
  </header>
  


  <div class="wrapper">
    <div class="border"></div>
      <h3>Reviews</h3>
      <?php
		$sq="select * from review,customer where customer.cust_id=review.cust_id and review.status=1";
		$ret=mysql_query($sq);
		while($ro=mysql_fetch_array($ret))
		{
	  ?>
      <blockquote><?php echo $ro['comment'];?>.
	  <span>~<?php echo $ro['username'];?></span></blockquote>
      <div class="border3"></div>
	  <?php 
	  } 
	  ?>
   	
    
   
    <br>
  </div>
  <footer>
    <div class="border"></div>
    <div class="home-widget">
          <h3>About Foodies_World</h3>
          
          <p>We are new in the city but with the motto to serve the the people with our best possible quality food. We also guarantee the we will serve you such that you can never complain.</p>
        </div>
        <div class="home-widget">
          <h3>Special Offers</h3>
          
          <p align="center"><img src="images/home/3.jpg" width="300px">
		  	Previous Cost: tk. 300<br>
			New Cost: tk. 250
		  </p>
        </div>
        <div class="home-widget">
          <h3>We Are Social!</h3><br><br><br>
          <div id="social"> <a href="http://twitter.com/priteshgupta" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com/priteshgupta" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a></div>
        </div>
     <div class="border2"></div>
   
    <span class="copyright"><span class="left">
     <center> &copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>  
    <br>
    </span></span></footer>
</div>
</body>
</html>