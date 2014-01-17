<!DOCTYPE HTML>
<html>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php" class="current">Menu</a></li>
        <li><a href="gallery.php">Gallery</a></li>
         <li><a href="login.php">Login</a></li>
          <li><a href="reviews.php">Review</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">
    <div class="border"></div>
    
      <div class="left">
        <h3>Chicken Biriani:  250Tk</h3>
      </div>
      <div class="left star"><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_half_full.png" class="noeffects" alt=""><img src="images/star_empty.png" class="noeffects" alt=""></div>
      
      <img src="images/home/1.jpg" class="left clear item" width="150" alt="">
      <p class="left">This is our new item Chicken Biriai, it is an bangali food. mainly popular at puran dhaka and we are providing the same taste of that area. Customers are rating it excellent with in a very short time. price is only 250 Tk. you can easily order it right now sitting at home  and enjoy!!!</p>
     
      
    
      <form action="update.php?id=<?php echo $item_id; ?>" method="post" >
              
	  <input type="submit" value="update" class="button" size="40">
	  </form> <br>
	  <form action="delete.php?id=<?php echo $item_id; ?>" method="post" >
	  <input type="submit" value="Delete" class="button" size="40" >
	  </form>
            <div class="border3"></div>
      <div class="left">
        <h3>Pizza : 600Tk</h3>
      </div>
      <div class="left star"><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_empty.png" class="noeffects" alt=""></div>
      
      <img src="images/menu/pizza4.jpeg" class="left clear item" width="150" alt="">
      <p class="left">This is our new item Pizza Type A, it is n italian item. customers are rating it excellent with in a very short time. price is only 600 Tk. you can easily order it right now sitting at home  and enjoy!!!.</p>
      <div class="border3"></div>
      <div class="left">
        <h3>Swarma : 240Tk</h3>
      </div>
      <div class="left star"><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_full.png" class="noeffects" alt=""></div>
      
      <img src="images/menu/shorma.jpg" class="left clear item" width="150" alt="">
      <p class="left">This is Swarma, really popular now  days, it is n italian item. customers are rating it excellent with in a very short time. price is only 240 Tk. you can easily order it right now sitting at home  and enjoy!!!</p>
      <div class="border3"></div>
      <div class="left">
        <h3>Coffee 100Tk</h3>
      </div>
      <div class="left star"><img src="images/star_full.png" class="noeffects" alt=""><img src="images/star_half_full.png" class="noeffects" alt=""><img src="images/star_empty.png" class="noeffects" alt=""><img src="images/star_empty.png" class="noeffects" alt=""><img src="images/star_empty.png" class="noeffects" alt=""></div>
      
      <img src="images/menu/coffee.jpg" class="left clear item" width="150" alt="">
      <p class="left">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae.</p>
   
   
         
     
     
    <div class="border2"></div>
    <br>
  </div>
  <footer>
    <div class="border"></div>
   <div class="home-widget">
          <h3>About Foodies_World</h3>
          
          <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae.</p>
        </div>
        <div class="home-widget">
          <h3>Our Most Popular Items</h3>
         
          <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae.</p>
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