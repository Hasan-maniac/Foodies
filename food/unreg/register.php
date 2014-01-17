<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>project</title>
	<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src=" ../scripts/jquery-1.6.min.js"></script>
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
	<script type="text/javascript" src="../scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
        
         <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
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
<script>
function validateForm()
{
var x=document.forms["reg_form"]["username"].value;
if (x==null || x=="")
  {
  alert("username name must be filled out");
  return false;
  }
  var y=document.forms["reg_form"]["password"].value;
if (y==null || y=="")
  {
  alert("password name must be filled out");
  return false;
  }
  var e=document.forms["reg_form"]["email_id"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>

	</head>
	<body>
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="../index.php" >Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
			 <li><a href="login.php" class="current">Login</a></li>
            <li><a href="contact.php">Contact</a></li>
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
          
<form name="reg_form" action="regok.php" method="POST" onsubmit="return validateForm()"  enctype="multipart/form-data">
<table align="center"  width="600">

<tr><td ><b>First Name </td><td><input type="text" name="firstname" size="25" value="" ><br>
<tr><td><b>Last Name </td><td><input type="text" name="lastname" size="25" value="" ><br>
<tr><td><b>Gender</td><td><input type="radio" name="grp1" value="Male"><b>Male<br><input type="radio" name="grp1" value="Female"><b>Female<br></td></tr><br>
<tr><td><b>Address </td><td><input type="text" name="address" size="25" value="" ><br>
<tr><td><b>Phn No </td><td><input type="text" name="phn_no" size="25" value="" ><br>
<tr><td><b>Card No </td><td><input type="text" name="card_no" size="25" value="" ><br>
<tr><td><b>Email ID </td><td><input type="text" name="email_id" size="25" value="" ><br>
<tr><td><b>User Name </td><td><input type="text" name="username" size="25" value="" ><br>
<tr><td><b>Password </td><td><input type="password" name="password" size="25" value="" ><br>
<tr><td><b>Date</td><td><input type="text" id="datepicker" name="date"/></td>

<tr><td colspan="2" align="right"><input type="reset" name="Reset" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="Submit" value="Submit"></td></tr><br>

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