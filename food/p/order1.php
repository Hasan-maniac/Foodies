 <?php
$a=$_POST['grp1'];
$b=$_POST['comborev'];
$c=$_POST['combo'];
if($a=="Reservation ")
{ 
    
    if($b=='Pending')
        {
            header("Location:revpending.php?");
        }
    else if($b=='Processing')
        {
            header("Location:revprocessing.php?");
        }
    else if($b=='Approved')
        {
            header("Location:revapprove.php?");
        }
   else if($b=='Rejected')
        {
             header("Location:revreject.php?");
        }
        else
        {
            header("Location:allrev.php?");
        }
}
 if($a=='Food Ordering')
    {
    
    if($c=='Pending')
        {
            header("Location:orderpending.php?");
        }
    else if($c=='Processing')
        {
            header("Location:orderprocessing.php?");
        }
    else if($c=='Approved')
        {
            header("Location:orderapprove.php?");
        }
   else if($c=='Rejected')
        {
             header("Location:orderrejected.php?");
        }
        else
        {
            header("Location:allorder.php?");
        }
}
else
    echo "blablabla";
    //header("Location:order.php?");*/