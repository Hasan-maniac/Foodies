

<?php
	include("include/config.php");	
		$post = $_GET['post'];
		
		$sql="update cart set status='0' where item_id=$post";
		var_dump($sql);
		$r=mysql_query($sql);
		
		$sql2="delete from orderr where item_id=$post";
		var_dump($sql2);
		$r2=mysql_query($sql2);
		
        if($r)
        {
           echo "Data not deleted";
        }
		  header("Location:add_cart.php");
?>