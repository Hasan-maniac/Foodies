<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src=" jquery-1.6.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	</head>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="managerhome.php" >Home</a></li>
            <li><a href="managermenu.php">Menu</a>
			<li><a href="insertt.php">Insert</a></li>

            <li><a href="gallery.php">Gallery</a></li>
	    <li><a href="manrevies.php" class="current">Reviews</a></li>
            <li><a href="mancontact.html">Contact</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
			 <form name="logout" action="logout.php" method="post">
                <input type="submit" class="button" name="logout" value="logout" > </form><br>
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
  
<?php
session_start();
include("../include/config.php");
//echo $_SESSION['username'];
?>
  

  <div class="wrapper">
    <div class="border"></div>
    
      <h3>Reviews</h3>
      <?php
		$sq="select * from review,customer where customer.cust_id=review.cust_id and review.status=0";
		$ret=mysql_query($sq);
		while($ro=mysql_fetch_array($ret))
		{
	  ?>
      <div class="right menu-order">
      <form action="revapprove.php?id=<?php echo $ro['cmnt_id'];?>" method="POST" name="app">
            <input type="hidden" name="id" value="<?php echo $ro['cmnt_id'];?>"/>
          <input type="submit" name="revsub" value="Approve" class="button" align="right"/>
      </form>
          <form action="revdel.php?id=<?php echo $ro['cmnt_id'];?>" method="POST">
              <input type="hidden" name="id" value="<?php echo $ro['cmnt_id'];?>"/>
          <input type="submit" name="revsub1" value="Delete" class="button"/>
          
      </form>
      </div>
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
          <div id="social"> <a href="http://twitter.com/priteshgupta" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="https://www.facebook.com/" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a></div>
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