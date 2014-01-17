<?php 
$cmnt_id=$_POST['id'];
echo $cmnt_id;

include("../include/config.php");

$query="UPDATE review SET status=1  WHERE cmnt_id='$cmnt_id'";
mysql_query($query);
header("Location:manrevies.php?");

  
?>
                     