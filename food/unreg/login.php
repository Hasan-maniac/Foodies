<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />

	<script type="text/javascript" src="../scripts/jquery-1.6.min.js"></script>
	
	
	
    <script type="text/javascript" language="javascript">
$(document).ready(function(){
    $("input").focus(function(){
       $(this).css("background-color","Yellow"); 
    });
     $("input").blur(function(){
       $(this).css("background-color","white"); 
    });
});    
</script>
	</head>
	<body>
   <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="../index.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
			 <li><a href="login.php" class="current">Login</a></li>
			 <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
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
      <div class="wrapper">
        <div class="username" align="left">
          
		   <form name="login" action="" method="post">
				Username:<br><input type="text" value="" name="username" size="20"/><br>
				Password:<br><input type="password" value="" name="password" size="13"/><br>
                <br><input type="submit" value="Login" name="button" size="40"/>
		</form>
                        If you are not registered, click <a href="register.php"><font color="#0000CC">here</font></a> to register
						<br><br>
		  
        </div>
		<br>
        <div class="clear"></div>
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
          <div id="social"> <a href="http://twitter.com/priteshgupta" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="http://www.facebook.com/bipasha.chowdhury" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a></div>
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

include("../include/config.php");
session_start();
if(isset( $_POST['username'])){
        $user = $_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from customer where username='$user'";
        echo "$sql";

        $retval=mysql_query($sql);

        while($row= mysql_fetch_array($retval) ){
        $dbUserPassword = $row['password'];
		$dbUsername = $row['username'];
        }
        if($dbUsername=='manager'){
            header("Location:../manager/managerhome.php?");
        }
       else  if($dbUsername=='manager1'){
            header("Location:../p/processinghome.php?");
        }
 else {
            
        if( $password == $dbUserPassword)
        {
			 //$_SESSION['username']= $dbUsername;
             header("Location:../register_view/home.php?name=$dbUsername");
        }
		else
			header("Location:../login.php?");
 }
		?>
<?php			
}
?>
