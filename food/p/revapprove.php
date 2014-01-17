<!DOCTYPE HTML>
<html>
    <?php 
    include("../include/config.php");
    $sq="select * from reservation ,customer where customer.cust_id=reservation.cust_id AND res_status='Approved' ";
    $ret=mysql_query($sq);
 
    ?>
	<head>
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
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
         <li><a href="processinghome.php" >Home</a></li>
            <li><a href="managermenu.php">Menu</a>
            <li><a href="gallery.html">Gallery</a></li>
	    <li><a href="order.php" class="current">Order Recieve</a></li>
            <li><a href="insertt.php">Customers</a></li>
            <li><a href="mancontact.php">Contact</a></li>
          </ul>
    </nav>
  </header>
  

  
  <div class="wrapper">
    <div class="border"></div>
    	

	<br><br>	
         <div class="CSSTableGenerator" >
	<table width="80%" align="center" border="1" bordercolor="#666666"<pre></pre>
			<tr>
				<td width="5%" id="form" align="center"><h5>Order By</h5></td>
				<td width="5%" id="form" align="center"><h5>Order Date</h5></td>
				<td width="5%" id="form" align="center"><h5>Time</h5></td>
				<td width="5%" id="form" align="center"><h5>Person</h5></td>
				<td width="5%" id="form" align="center"><h5>Status</h5></td>
                             
			</tr>
			</h5>
                      
                        
<?php
		
   
     while($x=mysql_fetch_array($ret))
    {  
       
        		
echo '
                        <input type="hidden" name="id_1[]" value="'.$x['reserv_id'].'"/>
			<tr> 
                         
		                <td width="5%" align="center"> '.$x['username'].'</td>
				<td width="5%" align="center"> '. $x['time'].'</td>
				<td width="5%" align="center"> '.$x['date'].' </td>
				<td width="5%" align="center"> '.$x['person'].'</td>
                                <td width="5%" align="center"> '.$x['res_status'].'</td>
                      
        </tr>';

        }
        ?>
                        <form action="order.php" method="post" >
                      <tr><td colspan="5" align="right"> <input type="submit" value="BACK" class="button" size="40" /></td></tr>        
</table>
         </div>
        <br><br><br>
        
        
                    
        </form>
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


