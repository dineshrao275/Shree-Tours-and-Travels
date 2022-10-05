<?php
  session_start();
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");
  $id=$_REQUEST['bookid'];
  $con=mysqli_connect("localhost","root","","shree");
  $r=mysqli_query($con,"update bookings set status='4' , cancel='yes' where id='$id'");
  if($r)
  {

      header("location:requestofuser.php");
  }

?>