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
<title>Project</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="managerhome.php">Home</a></li>
        <li><a href="managermenu.php" class="current" >Menu</a></li>
		<li><a href="insertt.php" >Insert</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="manrevies.php">Reviews</a></li>
        <li><a href="mancontact.html">Contact</a></li>
      </ul>
    </nav>
	<div class="reservations">
		<form name="logout" action="logout.php" method="post">
                <input type="submit" class="button" name="logout" value="logout" > </form>
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
         
        <h3><?php echo $x['item_name'].":".$x['price']."TK" ;?></h3>
      </div>
     
     <img src="<?php echo $x['image'] ; ?>" class="left clear item" width="150" alt="">
      <p class="left"><?php echo $x['about']; ?></p>
      <div class="right menu-order">
	  <form action="update.php?id=<?php echo $x['item_id'] ?>" method="post" >
              
	  <input type="submit" value="update" class="button" size="40">
	  </form> <br>
	  <form action="delete.php?id=<?php echo $x['item_id']; ?>" method="post" >
	  <input type="submit" value="Delete" class="button" size="40" >
	  </form>
	 
          
	  </div>
       
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
         <br>
<tr><td> <input type="submit" value="Search" name="submit" size="20" align="right" class="button"></td>
  
      <br><br><br>
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