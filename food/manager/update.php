<!DOCTYPE HTML>

<?php
$id=$_GET['id'];
//echo '<pre>'; var_dump($_REQUEST);echo '<pre>';


include("../include/config.php");
$query="SELECT * FROM itemm WHERE item_id=$id";
$retval = mysql_query( $query);
	
$info =  mysql_fetch_assoc($retval);
 $a=$info['catagory'];
          ?>
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
            <li><a href="managermenu.php"  class="current">Menu</a></li>
			   <li><a href="insertt.php">Insert</a></li>
            <li><a href="gallery.html">Gallery</a></li>
			 <li><a href="manrevies.php">Reviews</a></li>
            <li><a href="contact.php">Contact</a></li>
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
        <div class="username" >
         
		 <form name="update"  action="updated.php" method="post" style="border:medium">
<table>
<tr> <td>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
 <img src="<?php echo $info['image']; ?>" width="200"  height="200"/></td> <td align="center"> 
       
<tr><td ><b>Food name </td><font size="+2"><td align="center"><input type="text" name="foodname" size="25" value="<?php echo $info['item_name']; ?>" ></font><br>
<tr><td><b>Price </td><td align="center"><input type="text" name="price" size="25" value="<?php echo $info['price']; ?>" ><br>
<tr><td><b>Catagory</td><td>
        
            </td></tr><br> <br />
							<br />
<tr> <td> <b> About </b> </td> <td> <textarea name="about"><?php echo $info['about']; ?> </textarea> <br /> <br> </td> </tr> 
<tr><td colspan="2" align="right"><input type="reset" name="Reset" value="Reset" class="button">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Save" value="Save" class="button"></td></tr><br>

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