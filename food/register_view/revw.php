<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
       <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
	       <li><a href="reservation.php">Reserve</a></li>
            <li><a href="reviews.php" class="current">Review</a></li>
             <li><a href="account.php">Account</a></li>
          </ul>
      </ul>
    </nav>
	  <div class="reservations">
			<input type="button" class="button" name="logout" value="logout" > <br>
			
			</div>
			<br>
			<br>
			
  </header>
  
<?php
session_start();
include("../include/config.php");
//echo $_SESSION['username'];
?>
  

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
   
	
    
    <div class="border2"></div>
    <br>
  </div>
  <footer>
    <div class="border"></div>
    <div class="footer-widget">
      <h4>Some Title</h4>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
    </div>
    <div class="footer-widget">
      <h4>From The Blog</h4>
      <ul class="blog">
        <li><a href="#">Lorem Ipsum Dolor</a><br/>
          Orciint erdum condimen terdum nulla mcorper elit nam curabitur... </li>
        <li><a href="#">Praesent Et Eros</a><br/>
          Orciint erdum condimen terdum nulla mcorper elit nam curabitur... </li>
        <li><a href="#">Suspendisse In Neque</a><br/>
          Orciint erdum condimen terdum nulla mcorper elit nam curabitur... </li>
        <li><a href="#">Suspendisse In Neque</a><br/>
          Orciint erdum condimen terdum nulla mcorper elit nam curabitur... </li>
      </ul>
    </div>
    <div class="footer-widget">
      <h4>We Are Social!</h4>
      <div id="social"> <a href="http://twitter.com/priteshgupta" class="s3d twitter"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com/priteshgupta" class="s3d facebook"> Facebook <span class="icons facebook"></span> </a> <a href="http://forrst.com/people/priteshgupta" class="s3d forrst"> Forrst <span class="icons forrst"></span> </a> <a href="http://www.flickr.com/photos/priteshgupta" class="s3d flickr"> Flickr <span class="icons flickr"></span> </a> <a href="#" class="s3d designmoo"> Designmoo <span class="icons designmoo"></span> </a> </div>
    </div>
    <div class="border2"></div>
    <br />
    <span class="copyright"><span class="left"><br />
    &copy; Copyright 2012 - All Rights Reserved - <a href="#">Domain Name</a></span><span class="right"><br />
    Design by <a href="http://www.priteshgupta.com">PriteshGupta.com</a><br />
    <br>
    <br />
    </span></span></footer>
</div>
</body>
</html>