<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Connoisseur</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="unreg/menu.php" class="current">Menu</a></li>
		<li><a href="unreg/gallery.php" >Gallery</a></li>
			 <li><a href="unreg/login.php">Login</a></li>
			 <li><a href="unreg/reviews.php">Reviews</a></li>
            <li><a href="unreg/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  
<?php
include("include/config.php");
?>

  
  <div class="wrapper">
    <div class="border"></div>
    	<?php					
		$sql="select * from catagory,item where catagory.cat_id=item.cat_id";
		//var_dump($s_u);
		$rt=mysql_query($sql);
?>		

	<table width="40%" align="center">
			<tr>
				<td width="15%"><a href="edit.php>">Add New</a></td>
				<td width="10%"><a href="approve.php>">Edit</a></td>
				<td width="10%"><a href="delete.php>">Delete</a></td>
			</tr>
	</table>
	<br>		
	<table width="30%" align="center">
			<tr>
				<td width="1%" id="form" align="center">Catagory</td><td width="5%" id="form" align="center">Item Name</td>
			</tr>
		<?php
		//$b = time ();
		while($ro= mysql_fetch_assoc($rt))
		{			
?>
			<tr>
				<td align="center"><?php echo $ro['cat_name'] ."<br>";?></td>
				<td align="center"><?php echo $ro['item_name']."<br>";?></td>
			</tr>
<?php	
		}
?>
</table>
			
		
  </div> 

</body>
</html>