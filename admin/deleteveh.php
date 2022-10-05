<?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
    $id=$_REQUEST['id'];
    include("db.php");
    
    $r1=mysqli_query($con,"select vehicleno from add_vehicle where id='$id'");
    echo "<script> alert('are you want to delete this vehicle')</script>";
    $r=mysqli_query($con,"delete  from add_vehicle where id='$id'");
    if($r)
    {
      $row=mysqli_fetch_array($r1);
      $r2=mysqli_query($con,"delete from add_driver where vehicleno='$row[0]'");
        $_SESSION['del']="record deleted successfully!!";
       header("location:vehicleinfo.php?deleteveh=0");
     }
?>