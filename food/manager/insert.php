<?php
include("../include/config.php");
$target_path="photo/";
    $target_path=$target_path.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
    $foodname=$_POST['foodname'];
    $catagory=$_POST['grp1'];
    $price=$_POST['price'];
    $about=$_POST['about'];
   
    $que="INSERT INTO itemm(item_name,catagory,price,image,about,status) values('$foodname','$catagory','$price','$target_path','$about',1)";
     mysql_query($que);
    //$q="select * from post";
   // $res=mysql_query($q);
     header("Location:managermenu.php?");
?>
