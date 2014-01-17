

<?php
$conn = mysql_connect('localhost','root','')
			 or die("Not Connected:" );
		$db=mysql_select_db("food_ordering",$conn)
			 or die('Not Selected DB' );
?>