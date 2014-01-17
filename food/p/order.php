<!DOCTYPE HTML>
<html>
    
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />

	<script type="text/javascript" src=" ../jquery-1.6.min.js"></script>
	
	
	
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
             <li><a href="processinghome.php">Home</a></li>
            <li><a href="managermenu.php">Menu</a>
            <li><a href="gallery.html">Gallery</a></li>
	    <li><a href="order.php" class="current">Order Receive</a></li>
          
            <li><a href="mancontact.php">Contact</a></li>
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
            <table>
		   <form name="login" action="order1.php" method="post">
                       <tr><td>
                               <input type="radio" name="grp1" value="Food Ordering"><b>Food Ordering </td>
                    
                               <td align="center">     <h6>Select Options</h6><select name="combo">
                        <option value="Select">-Select-</option>
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="All">All</option>
                               </td> </tr> 
                              
                     </select>
                      <tr> <td>
		 <input type="radio" name="grp1" value="Reservation "><b>Reservation<br> </td>
                     <td>
                     <h6>Select Options</h6><select name="comborev">
                        <option value="Select">-Select-</option>
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Approved">Approved</option>
                         <option value="Rejected">Rejected</option>
                          <option value="All">All</option>
                   
                     </select><br> </td> </tr>
                     </table>
            <br><input type="submit" value="Go For It!" name="button" size="40"/></br> 
		
                
                       
		  
        </div>
		<br>
        <div class="clear"></div>
        <div class="border"></div>
        <div class="home-widget">
          <h3>About Foodies_World</h3>
          
          <p>We are new in the city but with the motto to serve the the people with our best possible quality food. We also guarantee the we will serve you such that you can never complain.</p>
        </div>
        <div class="home-widget">
          <h3>Special Offers</h3>
          
          <p align="center"><img src="../images/home/3.jpg" width="300px">
		  	Previous Cost: tk. 300<br>
			New Cost: tk. 250
		  </p>
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