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
  	include("include/config.php");
	session_start();
	$name=$_SESSION['username'];
	
	    $sql="select * from customer where username='$name'";
		$retval=mysql_query($sql);
		//var_dump($sq);
		while($ro=mysql_fetch_array($retval))
		{
			$cust_id=$ro['cust_id'];
		}
  ?>
	
  <div class="wrapper">
    <div class="border"></div><br>
     <div class="reservations">
                        <form name="login" action="revw.php" method="post">
			<input type="submit" class="button" name="button" value="Show other review" >
                        </form>
                        <br>
			
			</div>
    <center>  <h3>Reviews</h3> </center>
      <h6>
       <form name="login" action="" method="post">
       
                        Comment:<br><textarea rows="4" cols="50" name="comment"></textarea><br>
                    <br><input type="submit" value="Submit" name="button" class="button" size="40"/>
		</form></h6>
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
if(isset( $_POST['comment'])){
        $comment = $_POST['comment'];
 	
		$sql="insert into review"."(cust_id,comment,status)"." VALUES"."($cust_id,'$comment',0)";
		var_dump($sql);

        $r=mysql_query($sql);
        if($r==null)
        {
            header("Location:error.php");
        }
		    header("Location:reviews.php");
		?>
<?php			
}
?>