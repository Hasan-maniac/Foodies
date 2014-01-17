

<script type="text/javascript">
$(document).ready(function(){
  $(window).load(function(){
    alert("Goodbye!");
  });
});
</script>

<?php
	session_start();
	session_destroy();
	header("Location:../unreg/login.php");
        exit();
?>


