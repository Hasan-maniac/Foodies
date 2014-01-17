<!DOCTYPE HTML>
<html>
    <?php

include("../include/config.php");
$query="SELECT *from itemm where status=1";
$result = mysql_query($query);

  
$W="SELECT * FROM catagory";
   $result1=mysql_query($W);
  


?>
    

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
            <li><a href="processinghome.php" >Home</a></li>
            <li><a href="menu.php" class="current">Menu</a>
            <li><a href="gallery.html">Gallery</a></li>
	    <li><a href="order.php">Order Recieve</a></li>
           
            <li><a href="mancontact.php">Contact</a></li>
          </ul>
    </nav>
	<div class="reservations">
		
		</div> <br>
  </header>
  
  <div class="wrapper">
      <article class="menu">
       <?php
   while($x=mysql_fetch_array($result,MYSQL_ASSOC))
{
        
        
     ?> 
       
         
     
    <div class="border"></div>
   
      <div class="left">
         
        <h3><?php echo $x['item_name'].":".$x['price']."TK";?></h3>
      </div>
      
     <img src="<?php echo $x['image'] ; ?>" class="left clear item" width="150" alt="">
      <p class="left"><?php echo $x['about']; ?></p>
      
       
      <div class="border3"></div>
      <?php 
    } ?>
      </article>
      <aside class="sidebar">
      <h3>Choose The Catagory</h3><br><br><br>
      <?php 
   while($v=mysql_fetch_array($result1,MYSQL_ASSOC))
{ ?>
    					
      
      <form name="reges" action="s.php" method="post">
      
        <h6> <input type="radio" name="radios" value=" <?php  echo $v['cat_name']; ?> "><b><?php echo $v['cat_name'];?><br>
			
	 <?php   } ?>   
         
<tr><td> <input type="submit" value="search" name="submit" size="20" align="right"></td>
  
      <br><br><br>
    <div class="border2"></div>
    <br>
    </div>
  <footer>
    <div class="border"></div>
    <div class="home-widget">
          <h3>About Foodies_World</h3>
          
          <p>We are new in the city but with the motto to serve the people with our best possible quality food. We also guarantee the we will serve you such that you can never complain.</p>
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
    <br />
   
   <center>&copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>
    
    <div class="border"></div>
             <br />
    </footer>
</div>
</body>
</html>