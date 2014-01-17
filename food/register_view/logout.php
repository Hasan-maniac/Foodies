

<script type="text/javascript">
$(document).ready(function(){
  $(window).load(function(){
    alert("Goodbye!");
  });
});
</script>

<?php
	session_start();
	
	include("../include/config.php");
	$sql="update cart set status='0'";
	var_dump($sql);
	$r=mysql_query($sql);
	 if($r)
        {
           echo "Data not deleted";
        }
	
	session_destroy();
	
	header("Location:../unreg/login.php");
?>


