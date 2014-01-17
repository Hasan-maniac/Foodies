<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script type="text/javascript" src="jquery.timepicker.js"></script>
 <link rel="stylesheet" href="jquery.timepicker.css" />
 <script>
$(function() { $('#myPicker').timepicker(); });
// ]]></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
     
</head>
<?php
	session_start();
	$name=$_SESSION['username'];
?>  
<?php
include("include/config.php");
$sql="select * from customer where username='$name'";
		$retval=mysql_query($sql);
		//var_dump($sq);
		while($ro=mysql_fetch_array($retval))
		{
			$cust_id=$ro['cust_id'];
		}
?>

<body>    
<div id="container">
  <header>
    <nav>
      <ul id="nav">
       <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
	       <li><a href="reservation.php" class="current">Reserve</a></li>
            <li><a href="reviews.php">Review</a></li>
          
             <li><a href="account.php">Account</a></li>
          </ul>
      </ul>
    </nav>
  </header>
   <div class="reservations">
			<input type="button" class="button" name="logout" value="logout" > <br>
			
			</div><br> <br>
    <div class="wrapper">
    <div class="border"></div>
   
    <center>  <h3>Reservation</h3> </center>
  <h6>Please fill in your information below we will contact you as soon as possible to book your event.
      Or call +88 01675784282.</h6><br><br> 
<form action=""  method="post">	  
   <h6>Date</h6><input type="text" id="datepicker" name="date"/>
   <h6>Time</h6><input id="myPicker" class="time" type="text" name="time"/>
     <h6>Person</h6><input class="time" type="text" name="person"/>
      <h6>Event type</h6><select name="event">
              <option value="Birthday">-Select-</option>
               <option value="Birthday">Birthday</option>
                <option value="Anniversary">Anniversary</option>
                 <option value="Graduation">Graduation</option>
                  <option value="Reuninion">Reunion</option>
                   <option value="Others">Others</option>
         </select><br><br>
         <input type="submit" value="Submit" class="button"/>
</form>		 
         <h6> We will confirm your reservation by sms. Thanks.<h6>
    <br>
  </div>
    <br><br>
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

if(isset( $_POST['date'])){
        $date = $_POST['date'];
		$time = $_POST['time'];
		$event = $_POST['event'];
		$person = $_POST['person'];
 	
	$sql="insert into reservation"."(cust_id,date,time,person,type,res_status)"." VALUES"."($cust_id,'$date','$time','$person','$event','Pending')";

        $r=mysql_query($sql);
        if($r==null)
        {
            header("Location:error.php");
        }
		    header("Location:reservation.php");
		?>
<?php			
}
?>