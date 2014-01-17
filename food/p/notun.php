<?php

include("../include/config.php");   


        $status = $_POST['combo'];
        $st = $_POST['combox'];
        $id1 = $_POST['id_1'];
         $id2 = $_POST['id_2'];
        print_r( $status);
        print_r( $id1);
     
        for($r=0;$r<count($status);$r++)
        {
 	
        $sql="update reservation set res_status='$status[$r]' where reserv_id=$id1[$r]";
							//var_dump($sql);
	mysql_query($sql);	
        }
       
		    header("Location:order.php");

?>
 
