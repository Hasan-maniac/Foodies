<!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="../styles/table.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="../scripts/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	
	<?php
	session_start();
       include("../include/config.php");
	if (isset($_SESSION["username"])) 
	{	
            $name=$_SESSION['username'];
	
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
  
          


	<div class="CSSTableGenerator">	
	<table width="400">
		<tr>
		<td>Order Date</td>
		<td>Time</td>
		<td>Person</td>
                <td>Type</td>
                <td>Status</td>
		</tr>
		
		<?php 	
		include("include/config.php");
				$sq="SELECT * FROM reservation WHERE cust_id=$cust_id";
				$ret=mysql_query($sq);
				//var_dump($sq);
				while($row=mysql_fetch_array($ret))
				{

				?>
					
		<tr>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['person'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['res_status'];?></td>
		</tr>

		<?php } ?>                 
		  
        </div>
		</table>
        </div>
		<br>
                <br>
		<form name="reg1" action="account.php" method="post">
                    <input type="submit" value="BACK" class="button"></input>
        <div class="clear"></div>
        <div class="border"></div>
       
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
	} 
	else
		header("Location:../login.php");
?>