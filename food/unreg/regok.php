<?php
include("../include/config.php");

        $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $gender=$_POST['grp1'];
         $address=$_POST['address'];
         $phnno=$_POST['phn_no'];
         $cardno=$_POST['card_no'];
        $emailid = $_POST['email_id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
         $entrydate=$_POST['date'];
        
	$query="INSERT INTO customer (firstname,lastname,gender,address,phnno,cardno,emailid,username,password,entrydate)
        VALUES('$firstname','$lastname','$gender','$address','$phnno','$cardno','$emailid','$username','$password','$entrydate')";
		mysql_query($query);
	  header("Location:../index.php?");
?>