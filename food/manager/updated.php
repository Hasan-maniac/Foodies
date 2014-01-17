<?php 
$id=$_POST['id'];
$item_name=$_POST['foodname'];
$price=$_POST['price'];

$about=$_POST['about'];

include("../include/config.php");

$query="UPDATE itemm SET item_name='$item_name',price='$price', about='$about'  WHERE item_id='$id'";
mysql_query($query);
header("Location:managermenu.php?");

  
?>
                     