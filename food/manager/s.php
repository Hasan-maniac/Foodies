<!DOCTYPE HTML>
<html>
    <?php
$s1=$_POST['radios'];

include("../include/config.php");
$query="SELECT * from itemm where catagory='$s1' " ;

$result = mysql_query($query);

  
$W="SELECT * FROM catagory";
   $result1=mysql_query($W);
  


?>
    

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="managerhome.php">Home</a></li>
        <li><a href="managermenu.php" class="current" >Menu</a></li>
		<li><a href="insertt.php" >insert</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="manrevies.php">Reviews</a></li>
        <li><a href="mancontact.html">Contact</a></li>
      </ul>
    </nav>
	<div class="reservations">
		<input type="button" class="button" name="logout" value="logout" > 
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
         
<tr><td> <input type="submit" value="search" name="submit" size="20" align="right"></td>
  
      <br><br><br>
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