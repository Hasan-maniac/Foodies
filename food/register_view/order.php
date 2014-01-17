
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
	include("../include/config.php");
	?>
	
	<?php
		$sql="select * from customer where username='$name'";
		$retval=mysql_query($sql);
		//var_dump($sq);
		while($ro=mysql_fetch_array($retval))
		{
			$cust_id=$ro['cust_id'];
		}
	
		if( $_GET)
		{
			$item_id = $_GET['order'];
		}
		
		$sq="select * from itemm where item_id='$item_id'";
		$ret=mysql_query($sq);
		//var_dump($sq);
		while($row=mysql_fetch_array($ret))
		{
			$item_price=$row['price'];
		}
	?>	
	
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="home.php" >Home</a></li>
            <li><a href="menu.php class="current">Menu</a></li>
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
		
			<input type="button" class="button" name="logout" value="logout" > <br>
			
			
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
          
<form name="reg"  action="" method="post">
<table width="500" >
<tr><td>Item Name</td><td align="center">Quantity</td><td align="center">Required Date</td></tr>

		<?php
				$sq="select * from itemm where item_id=$item_id";
				$ret=mysql_query($sq);
				//var_dump($sq);
				while($row=mysql_fetch_array($ret))
				{
					$item_id=$row['item_id'];
				?>
					
<tr>
<td><?php echo $row['item_name'];?></td>
<td align="center" ><input type="text" size="10" value="" name="quantity"></td>
<td align="center" ><input type="text" id="datepicker" name="date"/></td>
</tr>
		<?php } ?>

 </div>
</table>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="button" name="Add To Cart" value="Add To Cart" align="right">
<br>
<br>
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
if(isset( $_POST['quantity'])){
        $amount = $_POST['quantity'];
		$date=$_POST['date'];
		$price=$item_price*$amount;
 	
 	    $sql="INSERT INTO cart(item_id,cust_id,amount,total_price,status) VALUES ('$item_id','$cust_id','$amount','$price','1')";
		var_dump($sql);
        $r=mysql_query($sql);
		
$sql2="INSERT INTO orderr(order_date,item_id,cust_id,amount,total_price,or_status) VALUES ('$date','$item_id','$cust_id','$amount','$price','pending')";
		var_dump($sql2);
        $r2=mysql_query($sql2);
        if($r==null)
        {
            header("Location:error.php");
        }
		    header("Location:add_cart.php");
		?>
<?php			
}
?>
	
 
