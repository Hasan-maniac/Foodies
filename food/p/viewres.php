<!DOCTYPE HTML>
<html>
    <?php 
    include("../include/config.php");
    $sq="select * from reservation ,customer where customer.cust_id=reservation.cust_id";
    $ret=mysql_query($sq);
    ?>
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
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
         <li><a href="managerhome.php" class="current">Home</a></li>
            <li><a href="managermenu.php">Menu</a>
            <li><a href="gallery.html">Gallery</a></li>
	    <li><a href="order.php">Order Recieve</a></li>
            <li><a href="insertt.php">Customers</a></li>
            <li><a href="mancontact.php">Contact</a></li>
          </ul>
    </nav>
  </header>
  

  
  <div class="wrapper">
    <div class="border"></div>
    	

	<br><br>	
	<table width="80%" align="center" border="1" bordercolor="#666666"<pre></pre>
			<tr>
				<td width="5%" id="form" align="center"><h5>Order By</h5></td>
				<td width="5%" id="form" align="center"><h5>Order Date</h5></td>
				<td width="5%" id="form" align="center"><h5>Time</h5></td>
				<td width="5%" id="form" align="center"><h5>Person</h5></td>
				<td width="5%" id="form" align="center"><h5>Status</h5></td>
                                <td width="5%" id="form" align="center"><h5>OK</h5></td>
			</tr>
			</h5>
		<?php
		//$b = time ();
		while($ro= mysql_fetch_assoc($ret))
		{			
?>
			<tr>
				<td width="5%" align="center"><?php echo $ro['username']; ?></td>
				<td width="5%" align="center"><?php echo $ro['date']; ?></td>
				<td width="5%" align="center"><?php echo $ro['time']; ?> </td>
				<td width="5%" align="center"><?php echo $ro['person']; ?></td>
                                
				<td width="5%" id="form" align="center">
				<select>
			<?php	while($table_array = mysql_fetch_array($ro)) 
{ 
    echo "<option>$table_array[0]</option>";
}  ?>
				</select>
				</td>
                                <td align="center">
                                    <form action="" name="reh" method="post">
                                        <input type="submit" class="button" value="OK"/>
                                    </form>
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