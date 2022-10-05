<?php
        session_start();
        
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");
        $id=$_REQUEST['bookid'];
        $con=mysqli_connect("localhost","root","","shree");
        $r=mysqli_query($con,"update bookings set status='2' where id='$id'");
        if($r)
        {
        $r1=mysqli_query($con,"select vehicleno from bookings where id ='$id'");
        $row=mysqli_fetch_array($r1);
        mysqli_query($con,"update add_vehicle set status='51'where vehicleno='$row[0]'");
            header("location:requestofuser.php");
        }


?>