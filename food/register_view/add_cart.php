<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="../scripts/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	
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
	
<?php
	session_start();
	if ($_SESSION['username'])
	{
	$name=$_SESSION['username'];
	include("../include/config.php");
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
            <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
		
			<a href="logout.php"><input type="button" class="button" name="logout" value="logout" > <br>
			
			
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
  		<?php
		
				$sql1="SELECT SUM(total_price ) as price FROM  cart WHERE status=1 ";
				$result=mysql_query($sql1);
				//var_dump($sq);
				while($r1=mysql_fetch_array($result))
				{
					$price=$r1['price'];
				}
		?>	        
<form name="reg"  action="menu.php" method="post">
<table width="600">
<?php
if($price!=0)
{
?>
<tr><td width="150">Order</td><td align="center" width="150">Quantity</td><td width="150" align="center">Price</td><td align="center">Remove </td></tr>
<?php } ?>

	
				<?php 	
				$sq="SELECT * FROM cart, itemm WHERE itemm.item_id = cart.item_id AND cart.status =1";
				$ret=mysql_query($sq);
				//var_dump($sq);
				while($row=mysql_fetch_array($ret))
				{
					$item_id=$row['item_id'];

				?>
					
<tr><td><?php echo $row['item_name'];?></td><td align="center" ><input type="text" size="10" value="<?php echo $row['amount'];?>" name="quantity">  </td><td align="center"><?php echo $row['total_price'];?> Tk. </td><td align="center"><a href="delete_info.php?post=<?php echo $row['item_id']?>"><img src="../Images/delete.gif"></a></td></tr>

		<?php } ?>
		
<?php
if($price!=0)
{
?>							
<tr><td>Total Price</td><td> </td><td align="center"><?php echo $price;?> Tk.</td></tr>
 </div>
</table><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="menu.php"><input type="submit" class="button" name="Continue Ordering" value="Continue Ordering" align="right"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="payment.php"><input type="button" class="button" name="checkout" value="Checkout" align="right"></a><br> <br>
<?php 
}
else
{
echo ("<br>");
echo("Your Cart is Empty");
}
?>
</form>                      
		  
        </div>
		<br>
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
 {
 	header("Location:../login.php?");
 }
?>