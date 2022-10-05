<?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
$id=$_REQUEST['bookid'];
include("db.php");
    $r=mysqli_query($con,"update bookings set status='3' where id='$id'");
    if($r)
    {   
        
        header("location:bookings.php");
    }        

?>
