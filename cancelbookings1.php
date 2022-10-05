<?php
    session_start();
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");

    $id=$_REQUEST['bookid'];
    include('db.php');
   $r= mysqli_query($con,"update bookings set status='4',cancel='yes' where id='$id'");
    if($r)
    { $_SESSION['canmes']='your booking is cancelled';
   header("location:cancelbookings.php");
    }
?>