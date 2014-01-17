
<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$db = mysql_connect('localhost','root','');
	mysql_select_db('food_ordering',$db);
	$query = 'INSERT INTO rating(item_id,rating,client_ip) VALUES("'.$_GET['id'].'","'.$_GET['r'].'","'.$ip.'")';
	$result = mysql_query($query);
?>