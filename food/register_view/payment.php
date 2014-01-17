<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
        <script src="jquery_latest.js" type="text/javascript"></script> 
        <script src="script.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../style.css" type="text/css" />
<link rel="stylesheet" href="../styles/payment_style.css" type="text/css" />
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="../scripts/jquery_latest.js" type="text/javascript"></script>
		<script src="../scripts/slider.js" type="text/javascript"></script>
        <script type="text/javascript">
		$(document).ready(function() {
		  $('h5').sliderPlugin({
			duration: 500,
			complete: function(){
				;
			}
		  });
		});

		</script>
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
       <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php" class="current">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
	       <li><a href="reservation.php">Reserve</a></li>
            <li><a href="reviews.php" >Review</a></li>
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
  	include("include/config.php");
	session_start();
	$name=$_SESSION['username'];
	
	    $sql="select * from customer where username='$name'";
		$retval=mysql_query($sql);
		//var_dump($sq);
		while($ro=mysql_fetch_array($retval))
		{
			$cust_id=$ro['cust_id'];
			$cust_address=$ro['address'];
		}
  ?>
	
  <div class="wrapper">
    <div class="border"></div><br>
 		
<div id class="design">	
<div id="content_pane">      
		<h4 align="center">MY Address</h4>
		
		<form method="POST" action="">
			<p align="center"><input type="text" name="location"  value="<?php echo "$cust_address"?>">
			<p align="center"><input type="submit" value="Change It">
		</form>
		
		<h4 align="center">Payment Process</h4>
		<h5>Credit Card</h5>
		<div id="shower" class="pane_toggler">
		 <form id="reg_form" action="" method="post"> 
		 
                	<div id="cardowner" align="center">Credit Card Owner<input type="text"></div> 
              		<div id="cardno" align="center">Credit Card No. <input type="text"></div>
					<div id="cardexp" align="center">Credit Card Expiry Date <input type="text"></div>
                	<p align="center"><a href="thanks.php">
					<input type="button" value="Continue" name="credit"/> 
            </form> 
		</div>
		<h5>Cash On Delivery</h5>
		<div id="shower" class="pane_toggler">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Be with your previous location?
			<a href="thanks.php"><input type="button" value="Continue" name="cash"/> 
		</form>	
		</div>
</div> 
    <br>
  </div>
</div>  
  <footer>
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


<?php

include("include/config.php");
if(isset( $_POST['location'])){
        $location = $_POST['location'];
 	
		$sql="update customer set address='$location' where cust_id='$cust_id'";
		var_dump($sql);
		$r=mysql_query($sql);

        if($r==null)
        {
            header("Location:error.php");
        }
		    header("Location:payment.php");			
}

if(isset($_POST['credit']))
{ 	
		$sql1="insert into payment (order_id,payment_type)
        VALUES('$lastname','$gender')";
		var_dump($sql1);
		$r1=mysql_query($sql1);
		if($r1==null)
        {
            header("Location:error.php");
        }
		    header("Location:thanks.php");		
			
}
else if(isset($_POST['cash']))
{ 	
		$sql2="";
		var_dump($sql2);
		$r2=mysql_query($sql2);	
		if($r2==null)
        {
            header("Location:error.php");
        }
		    header("Location:thanks.php");	
}
else;

?>