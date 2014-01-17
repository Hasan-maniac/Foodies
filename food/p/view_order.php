<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="scripts/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
		<li><a href="gallery.php" >Gallery</a></li>
			 <li><a href="login.php" class="current">Order</a></li>
			 <li><a href="revok.php">Reserve</a></li>
            <li><a href="customer.php">Customer</a></li>
      </ul>
    </nav>
  </header>
  

  
  <div class="wrapper">
    <div class="border"></div>
    	

	<br><br>	
	<table width="80%" align="center" border="1" bordercolor="#666666"<pre></pre>">
			<tr>
				<td width="5%" id="form" align="center"><h5>Order By</h5></td>
				<td width="5%" id="form" align="center"><h5>Order Date</h5></td>
				<td width="5%" id="form" align="center"><h5>Quantity</h5></td>
				<td width="5%" id="form" align="center"><h5>Status</h5></td>
			</tr>
			</h5>
		<?php
		//$b = time ();
		//while($ro= mysql_fetch_assoc($rt))
		{			
?>
			<tr>
				<td width="5%" align="center">Zakia</td>
				<td width="5%" align="center">30/03/2013</td>
				<td width="5%" align="center">2</td>
				<td width="5%" id="form" align="center">
				<select>
				<option>Pending</option>
				<option>Processing</option>
				<option>Delivered</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="5%" align="center">Minar</td>
				<td width="5%" align="center">03/04/2013</td>
				<td width="5%" align="center">1</td>
				<td width="5%" align="center">
				<select>
				<option>Pending</option>
				<option>Processing</option>
				<option>Delivered</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="5%" align="center">Bipasha</td>
				<td width="5%" align="center">05/04/2013</td>
				<td width="5%" align="center">1</td>
				<td width="5%" align="center">
				<select>
				<option>Pending</option>
				<option>Processing</option>
				<option>Delivered</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="5%" align="center">Anannya</td>
				<td width="5%" align="center">06/04/2013</td>
				<td width="5%" align="center">3</td>
				<td width="5%" align="center">
				<select>
				<option>Pending</option>
				<option>Processing</option>
				<option>Delivered</option>
				</select>
				</td>
			</tr>
			
<?php	
		}
?>
</table>
	<br><br><br><br><br><br>		
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