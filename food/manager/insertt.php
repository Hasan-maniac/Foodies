<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src=" jquery-1.6.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.pikachoose.js"></script>
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
include("../include/config.php");
$W="SELECT * FROM catagory";
   $result=mysql_query($W);
  
?>

	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="managerhome.php">Home</a></li>
            <li><a href="managermenu.php"  >Menu</a></li>
			   <li><a href="insertt.php" class="current">Insert</a></li>
            <li><a href="gallery.php">Gallery</a></li>
			 <li><a href="manrevies.php">Reviews</a></li>
            <li><a href="mancontact.html">Contact</a></li>
          </ul>
        </nav>
        <hgroup class="intro">
          <h1 class="title">FOODIES_WORLD</h1>
          <h3 class="tagline">Place Your Order Here </h3>
        </hgroup>
		
        <div class="reservations">
			 <form name="logout" action="logout.php" method="post">
                <input type="submit" class="button" name="logout" value="logout" > </form>
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
        <div class="username" >
          

    <form name="reg" action="insert.php" method="post" enctype="multipart/form-data" style="border:medium">
        <table>

<tr><td ><b>Food name </td><td align="center"><input type="text" name="foodname" size="25" value="" ><br>
<tr><td><b>Price </td><td align="center"><input type="text" name="price" size="25" value="" ><br>
       
        
<tr><td><b>Catagory</td><td>
 <?php
while($v=mysql_fetch_array($result,MYSQL_ASSOC))
{
    
?>
        <input type="radio" name="grp1" value=" <?php  echo $v['cat_name']; ?> "><b><?php echo $v['cat_name'];?><br>
			
							  <?php } ?>
<tr> <td> <b> About </b> </td> <td> <textarea rows="4" cols="50" name="about"></textarea> <br /> <br> </td> </tr> 
<tr><td>
<input type="hidden" name="MAX_FILE_SIZE" value="60000000"/></td></tr>
<input type="file" name="photo"/><br>
<tr><td colspan="2" align="right"><input type="reset" name="Reset" value="Reset" class="button">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="Insert" class="button"></td></tr><br>

</table><br><br>
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