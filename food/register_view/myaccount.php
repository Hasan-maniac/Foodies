<html>
	<head>
            
       
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="../scripts/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	
	</head>
	<?php
	session_start();
	$name=$_SESSION['username'];
        include("../include/config.php");
      $query="SELECT * FROM customer WHERE username='$name'";
$retval = mysql_query($query);
$info=mysql_fetch_array($retval);

	 ?>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="reservation.php">Reserve</a></li>
            <li><a href="reviews.php">Review</a></li>
            <li><a href="account.php" class="current">Account</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
		
			<a href="logout.php"><input type="button" class="button" name="logout" value="logout"></a><br>
			
			
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
          


		
		<form name="reg"  action="" method="post" onsubmit="return validateForm()"  enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo $info['cust_id']; ?>"/>
<b>User Name </b><input type="text" name="username" id="username" size="35" value="<?php echo $info['username']; ?>" ><br>
<b>Email ID </b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" size="35" value="<?php echo $info['emailid']; ?>" ><br>
<b>Phone_no </b> &nbsp;&nbsp;<input type="text" name="phnno" id="username" size="35" value="<?php echo $info['phnno']; ?>" ><br>
<b>Password  </b>&nbsp;&nbsp;<input type="password" name="password" id="password" size="23" value="<?php echo $info['password']; ?>" ><br>
<br>
<input type="reset" name="Reset" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit" value="Submit"></td></tr><br>
</form>  
		<br>
		<form name="reg1" action="account.php" method="post">
                    <input type="submit" value="BACK" class="button"></input>
                  
		  
        </div>
		<br>
        <div class="clear"></div>
        <div class="border"></div>
       
      <footer>
        <div class="border"></div>
             <br />
       
        <center> &copy; Copyright 2013 - All Rights Reserved - GROUP 6
</center>      
<div class="border"></div>
             <br />

</footer>
    </div>
</body>



<?php
 include("../include/config.php");
$id=$_POST['id'];
        $user = $_POST['username'];
        $email = $_POST['email'];
        $phnno = $_POST['phnno'];
	$password = $_POST['password'];
 	
	$query="UPDATE customer SET username='$user',emailid='$email', phnno='$phnno', password='$password'  WHERE cust_id='$id'";
mysql_query($query);

		?>
