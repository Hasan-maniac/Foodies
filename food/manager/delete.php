<?php
include("../include/config.php");
$id=$_GET['id'];
//echo '<pre>'; var_dump($_REQUEST);echo '<pre>';


$query="UPDATE itemm SET status=0  WHERE item_id='$id'";
$r= mysql_query( $query);
include 'managermenu.php';

?>